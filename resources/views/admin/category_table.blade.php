@extends('admin.layouts.master')

@section('content')
    <div class="capitalize flex justify-between mb-4">
        <div class="text-lg font-bold space-x-3 text-gray-800">category list</div>
        <div>
            <a class="px-3 py-2 shadow text-gray-100 bg-gray-700 hover:bg-gray-900 font-semibold" href="{{route('category.create')}}">add Category</a>
        </div>
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Sl No
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category Name
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)


                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$category->id +1}}
                    </th>
                    <td class="py-4 px-6">
                        {{$category->title}}
                    </td>
                    <td class="py-4 px-6 flex gap-3">
                        <a href="{{route('category.edit',$category->id)}}" class="font-medium bg-gray-800 px-4 py-1 hover:bg-gray-900 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('category.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button  class="font-medium bg-gray-800 px-4 py-1 hover:bg-gray-900 text-red-600 dark:text-red-500 hover:underline cursor-pointer" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{$categories->links()}}
    </div>
@endsection
