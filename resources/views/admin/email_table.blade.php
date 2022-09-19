@extends('admin.layouts.master')

@section('content')
    <div class="capitalize flex justify-between mb-4">
        <div class="text-lg font-bold space-x-3 text-gray-800">Doctor list</div>
        <div>
            <form action="" method="get">
                <input class="px-1 focus:outline-none" type="search" name="s" id="s" placeholder="Search email">
                <button class="bg-gray-800 px-2 text-white" type="submit">Search</button>
            </form>
        </div>
        <div>
            <a class="px-3 py-2 shadow text-gray-100 bg-gray-700 hover:bg-gray-900 font-semibold"
                href="{{ route('email.create') }}">Add Email</a>
        </div>

    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Email id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Updated_at
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($emails as $email)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ $email->id }}
                        </td>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $email->email }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $email->updated_at }}
                        </td>

                        {{-- <td class="py-4 px-6">
                        <img src="{{Storage::url($doctor->image)}}" alt="" width="50px">
                    </td> --}}
                        <td class="py-4 px-6 flex gap-3 items-center">

                            <form action="{{ route('email.destroy', $email->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="font-medium cursor-pointer bg-gray-800 px-4 py-1 hover:bg-red-900 hover:text-white text-red-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    {{ $emails->links('pagination::tailwind') }}
@endsection
