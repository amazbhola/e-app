@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Update Category</h2>
            <hr>
        </div>

        <form action="{{ route('category.update',$category->id) }}" method="post" class="">
            @csrf
            @method('put')
            <div class="px-4 py-2 w-full">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Category Title" type="text" name="title" id="title" value="{{ $category->title }}"
                    required>
                <label class="capitalize text-gray-100 text-sm" for="title">Category Title</label>
            </div>

            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit"
                    name="submit">

            </div>
        </form>
    </div>
@endsection
