@extends('admin.layouts.master')

@section('content')
<div class="capitalize flex justify-between mb-4">
    <div class="text-lg font-bold space-x-3 text-gray-800">Doctor list</div>
    <div>
        <a class="px-3 py-2 shadow text-gray-100 bg-gray-700 hover:bg-gray-900 font-semibold" href="{{route('doctor.create')}}">Add Doctor</a>
    </div>

</div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Doctor id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Doctor Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Designation
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Phone
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$doctor->id}}
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$doctor->name}}
                    </th>
                    <td class="py-4 px-6">
                        {{$doctor->degree}}
                    </td>
                    <td class="py-4 px-6">
                        {{$doctor->email}}
                    </td>
                    <td class="py-4 px-6">
                        {{$doctor->phone}}
                    </td>
                    {{-- <td class="py-4 px-6">
                        <img src="{{Storage::url($doctor->image)}}" alt="" width="50px">
                    </td> --}}
                    <td class="py-4 px-6 flex gap-3 items-center">
                        <a href="{{route('doctor.edit',$doctor->id)}}" class="font-medium  bg-gray-800 px-4 py-1 hover:bg-gray-900 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('doctor.destroy',$doctor->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium cursor-pointer bg-gray-800 px-4 py-1 hover:bg-gray-900 text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                        <div>
                            <a class="px-4 py-1 shadow text-gray-100 bg-green-700 hover:bg-green-800" href="{{ route('post.show',$doctor->id) }}">Pdf Download</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
