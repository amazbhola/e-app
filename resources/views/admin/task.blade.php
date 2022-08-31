@extends('admin.layouts.master')
@php

@endphp
@section('content')
    <div class="flex justify-between">
        <h1 class="font-semibold text-lg text-gray-800 drop-shadow-md">Task list</h1>
        <a class="px-3 py-1 bg-gray-700 hover:bg-gray-900 text-gray-100" href="{{ route('task.create') }}">Add Task</a>

    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

        @foreach ($tasks as $task)
            <div class="bg-gray-200 shadow-md p-6 space-y-2 m-4">
                <div class="flex justify-between">
                    <h3 class="text-xl font-semibold capitalize">{{ $task->title }}</h3>
                    @include('admin.partials._task_status', ['task' => $task])
                </div>
                @if ($task->image)
                    <a href="{{ route('task.show',$task->id) }}">
                        <img src="{{ Storage::url($task->image) }}" alt="image" width="50px">
                    </a>
                @endif
                <p>{{ $task->description }}</p>
                <div class="flex gap-3">
                    <a class="px-4 py-1 bg-slate-800 hover:bg-slate-900 text-slate-100"
                        href="{{ route('task.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="px-4 py-1 bg-red-800 hover:bg-red-900 text-slate-100 cursor-pointer" type="submit"
                            >Delete</button>
                        </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
