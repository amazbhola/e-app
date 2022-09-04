@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Edit Task Form</h2>
            <hr>
        </div>


        <form action="{{ route('task.update', $task->id) }}" method="post" class="" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="px-4 py-2 w-full">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Task title" type="text" name="title" id="title" value="{{ $task->title }}">
                <label class="capitalize text-gray-100 text-sm" for="title">title</label>
            </div>
            <div class="px-4 py-2 w-full">
                <textarea
                    class="py-1 px-0 w-full bg-gray-600 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
                <label class="capitalize text-gray-100 text-sm" for="description">description</label>
            </div>
            <div class="px-4 py-2 w-full">
                <select name="status" id="">
                    <option value="" >--Select Status--</option>
                    <option value="active" {{ $task->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="pending"{{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="done"{{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
                </select>
                <label class="capitalize text-gray-100 text-sm" for="category">Task Status</label>
            </div>
            <div class="px-4 py-2 w-full">
                @if ($task->imgae)
                    <p>Old Image</p>
                @endif
                <img src="{{ Storage::url($task->image) }}" alt="" width="60">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Post Image" type="file" name="image" id="image">
                <label class="capitalize text-gray-100 text-sm" for="image">task image</label>
            </div>
            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit" name="submit"
                    id="submit">
            </div>
        </form>
    </div>
@endsection
