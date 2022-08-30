@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Add Post Form</h2>
            <hr>
        </div>
        <form action="" method="post" class="" enctype="multipart/form-data">
            {{-- {{dd($editpost)}} --}}
            @csrf
            @method('put')
            <div class="px-4 py-2 w-full">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Post title" type="text" name="post_title" id="post_title"
                    value="">
                <label class="capitalize text-gray-100 text-sm" for="post_title">title</label>
            </div>
            <div class="px-4 py-2 w-full">
                <textarea
                    class="py-1 px-0 w-full bg-gray-600 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                <label class="capitalize text-gray-100 text-sm" for="description">description</label>
            </div>
            <div class="px-4 py-2 w-full">
                <select name="category" id="">
                    <option value="{{ old('category') }}" >--Select Category--</option>
                    {{-- @foreach ($categories as $category)
                        <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                    @endforeach --}}
                </select>
                <label class="capitalize text-gray-100 text-sm" for="category">Post Category</label>
            </div>
            <div class="px-4 py-2 w-full">

                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Post Image" type="file" name="image" id="image" value="{{ old('image') }}">
                <label class="capitalize text-gray-100 text-sm" for="image">Post image</label>
            </div>
            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit" name="submit"
                    id="submit">
            </div>
        </form>
    </div>
@endsection
