@extends('admin.layouts.master_tow')

@section('content')
    <div class="flex h-16 bg-yellow-500 items-center gap-4 px-6 w-full">
        <a id="hambarg" class="w-14 " href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-12 h-12 hover:bg-yellow-600 p-2 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </a>
        <a class="w-52 text-2xl text-left" href="{{ route('googleKeep.index') }}">
            <strong class="font-bold">Google </strong><span>Keep</span>
        </a>
        <div class="relative w-8/12">
            <form class="flex" action="" method="get">
                <input class="bg-yellow-600 opacity-80 pl-16 py-3 w-full text-gray-800 rounded-sm" placeholder="Search"
                    type="search" name="search" id="search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 absolute left-2 top-3 font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <button type="submit" class="hidden py-3">search</button>
            </form>
        </div>
    </div>
    <div id="sidebar" class="hidden md:flex flex-col w-80 h-full bg-gray-200 absolute left-0 gap-1 text-xl mt-4">
        @foreach ($categories as $category)
            <a class="hover:bg-gray-300 rounded-3xl w-full px-4 py-2 flex gap-2 items-center"
                href="{{ url('category/search', $category->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd" />
                    <path
                        d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z" />
                </svg>

                {{ $category->title }}
            </a>
        @endforeach
    </div>
    <div class="md:pl-80  mt-4 mx-4 flex flex-col items-center">
        <div class="p-4 w-full lg:w-2/5 bg-gray-200 rounded-md shadow-black shadow-sm mb-10">
            @include('admin.partials._massage')
            <form action="{{ route('googleKeep.store') }}" method="post" class="flex flex-col"
                enctype="multipart/form-data">
                @csrf
                <input class="hover:outline-none outline-none bg-gray-200 w-full mb-2" type="text" placeholder="Title"
                    name="title" value="{{ old('title') }}"><br>
                <textarea class="bg-gray-200 hover:outline-none w-full outline-none" name="note" id="" cols="77"
                    rows="3" placeholder="Take a note...">{{ old('note') }}</textarea><br>
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <div>
                            <input class="hidden" type="file" name="image" id="image">
                            <label for="image">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" for="image"
                                    fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                        <div class="text-xs">
                            <select name="status" id="" class="bg-gray-200 outline-none">
                                <option value="">Status</option>
                                <option value="active">Active</option>
                                <option value="deactive">Deactive</option>
                            </select>
                        </div>
                        <div class="text-xs">
                            <select name="category_id" id="" class="bg-gray-200 outline-none">
                                <option value="">Cetegory</option>
                                @foreach ($categories as $category)
                                    <option class="bg-gray-200" value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="self-end bg-gray-700 hover:bg-gray-900 text-gray-100 px-2">Subimt</button>

                </div>
            </form>
        </div>
        <div id="main" class="flex flex-col lg:flex-row flex-wrap gap-4 justify-center ">
            @foreach ($notes as $note)
                <div
                    class="card bg-gray-200 grow p-4 rounded-md shadow-sm shadow-black border border-gray-300 w-fit lg:w-1/5 h-fit">
                    @if (Storage::disk('local')->has($note->image))
                        <img class="max-w-full h-20 content-center object-cover" src="{{ Storage::url($note->image) }}"
                            alt="">
                    @endif
                    <h3 class="font-semibold text-xl">{{ $note->title }}</h3>
                    <p>{{ $note->note }}</p>
                    <div class="flex items-center justify-between mt-2">
                        @php
                            $bgColor = 'bg-gray-600';
                            switch ($note->status) {
                                case 'active':
                                    $bgColor = 'bg-green-600';
                                    break;

                                default:
                                    break;
                            }
                        @endphp
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>

                        </a>
                        <div class="{{ $bgColor }} px-2 shadow-md rounded text-gray-100 text-xs">
                            {{ $note->status }}
                        </div>
                        <div class="px-2 text-xs">
                            {{ $note->category->title }}
                        </div>
                        <form action="{{ route('googleKeep.destroy', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                        clip-rule="evenodd" />
                                </svg>

                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
