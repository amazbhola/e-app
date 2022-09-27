@extends('layouts.master')

@section('content')
    @include('partials._nav')
    <div class="flex justify-between">
        <h1 class="font-semibold text-lg text-gray-800 drop-shadow-md">Product list</h1>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

        @foreach ($products as $product)
            <div class="bg-gray-200 shadow-md p-6 space-y-2 m-4">
                <div class="flex justify-between">
                    <h3 class="text-xl font-semibold capitalize">{{ $product->name }}</h3>
                    {{-- @include('admin.partials._task_status', ['task' => $task]) --}}
                </div>
                @if ($product->image)
                    <a href="{{ route('task.show', $product->id) }}">
                        <img src="{{ Storage::url($product->image) }}" alt="image" width="50px">
                    </a>
                @endif
                @if (!is_null($product->description))
                    <p>{{ $product->description }}</p>
                @endif
                <p>{{ $product->category->title }}</p>

                {{-- <span>{{ $product->category->title }}</span> --}}
                <div class="flex gap-3">
                    <a class="px-4 py-1 bg-slate-800 hover:bg-slate-900 text-slate-100"
                        href="{{ route('task.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('task.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="px-4 py-1 bg-red-800 hover:bg-red-900 text-slate-100 cursor-pointer"
                            type="submit">Delete</button>
                    </form>

                </div>
            </div>
        @endforeach
    </div>
@endsection
