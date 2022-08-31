@extends('admin.layouts.master')

@section('content')
<div class="capitalize flex justify-between mb-4">
    <div class="text-lg font-bold space-x-3 text-gray-800">Posts list</div>
    <div>
        <a class="px-3 py-2 shadow text-gray-100 bg-gray-700 hover:bg-gray-900 font-semibold" href="{{route('post.create')}}">add post</a>
    </div>
</div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-2">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Post id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Posts Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Description
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Post Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="py-4 px-6">
                        {{$post->id}}
                    </td>
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$post->title}}
                    </th>
                    <td class="py-4 px-6">
                        {{$post->description}}
                    </td>
                    <td class="py-4 px-6">
                        {{$post->category->title}}
                    </td>
                    <td class="py-4 px-6">
                        <img src="{{Storage::url($post->image)}}" alt="" width="50px">
                    </td>
                    <td class="py-4 px-6 flex gap-3">
                        <a href="{{route('post.edit',$post->id)}}" class="font-medium  bg-gray-800 px-4 py-1 hover:bg-gray-900 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium cursor-pointer bg-gray-800 px-4 py-1 hover:bg-gray-900 text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
