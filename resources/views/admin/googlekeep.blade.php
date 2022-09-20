@extends('admin.layouts.master_tow')

@section('content')
    <div class="flex h-16 bg-yellow-500 items-center gap-4 px-6 w-full">
        <a class="w-14 " href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-12 h-12 hover:bg-yellow-600 p-2 rounded-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </a>
        <a class="w-52 text-2xl text-left" href="">
            <strong class="font-bold">Google </strong><span>Keep</span>
        </a>
        <div class="relative w-8/12">
            <input class="bg-yellow-600 opacity-80 pl-16 py-3 w-full text-gray-800 rounded-sm" placeholder="Search"
                type="search" name="search" id="search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-7 h-7 absolute left-2 top-3 font-bold">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

        </div>
    </div>
    <div class="hidden md:block w-80 h-full bg-gray-700 absolute left-0 ">

    </div>
    <div class="md:pl-80  mt-4 mx-4 flex flex-col items-center">
        <div class="p-4 w-full lg:w-2/5 bg-gray-200 rounded-md shadow-black shadow-md mb-10">
            <form action="{{ route('googleKeep.store') }}" method="post" class="flex flex-col"
                enctype="multipart/form-data">
                @csrf
                <input class="hover:outline-none outline-none bg-gray-200 w-full mb-2" type="text" placeholder="Title"
                    name="title"><br>
                <textarea class="bg-gray-200 hover:outline-none w-full outline-none" name="note" id="" cols="77"
                    rows="3" placeholder="Take a note..."></textarea><br>
                <div class="flex justify-between">
                    <div>
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

                    </div>
                    <button type="submit" class="self-end bg-gray-700 hover:bg-gray-900 text-gray-100 px-2">Subimt</button>

                </div>
            </form>
        </div>
        <div id="main" class="flex flex-col lg:flex-row flex-wrap gap-4 justify-center ">
            @foreach ($notes as $note)
                <div class="card bg-gray-200 grow p-4 rounded-md shadow-lg border border-gray-300 w-1/5 h-fit">
                    @if (Storage::disk('local')->has($note->image))
                        <img class="max-w-full h-20 content-center object-cover" src="{{ Storage::url($note->image) }}"
                            alt="">
                    @endif
                    <h3 class="font-semibold text-xl">{{ $note->title }}</h3>
                    <p>{{ $note->note }}</p>

                </div>
            @endforeach

        </div>
    </div>
@endsection
