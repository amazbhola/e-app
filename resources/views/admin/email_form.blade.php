@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Add Email</h2>
            <hr>
        </div>
        <form action="{{ route('email.store') }}" method="post" class="mt-8">
            @csrf
            <div class="px-4 py-2 w-full">
                <textarea
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Write email addresses by seperated ," value="{{ old('email') }}" type="email" name="email"
                    id="email" required></textarea>
                <label class="capitalize text-gray-100 text-sm" for="email">Email</label>
            </div>


            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit" name="submit"
                    id="">

            </div>
        </form>
    </div>
@endsection
