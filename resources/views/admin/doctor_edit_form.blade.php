@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Add Doctor</h2>
            <hr>
        </div>

        <form action="{{ route('doctor.update',$doctor->id) }}" method="post" class="mt-8">
            @csrf
            @method('put')
            <div class="px-4 py-2 w-full">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    value="{{ $doctor->name }}" type="text" name="name" id="name" required>
                <label class="capitalize text-gray-100 text-sm" for="name">Doctor Name</label>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Email" type="text" name="email" id="email" value="{{ $doctor->email }}">
                    <label class="capitalize text-gray-100 text-sm" for="email">Email</label>
                </div>
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Phone" type="tel" maxlength="11"
                        name="phone" id="phone" value="{{ $doctor->phone }}">
                    <label class="capitalize text-gray-100 text-sm " for="phone">Phone </label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Degree" type="text" name="degree" id="degree" value="{{ $doctor->degree }}">
                    <label class="capitalize text-gray-100 text-sm" for="degree">Degree</label>
                </div>
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Specialist" type="text" name="specialist" id="specialist" value="{{ $doctor->specialist }}">
                    <label class="capitalize text-gray-100 text-sm " for="specialist">Specialist <span
                            class="text-xs">(optional)</span></label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Job Location" type="text" name="job_location" id="job_location" value="{{ $doctor->job_location }}">
                    <label class="capitalize text-gray-100 text-sm" for="job_location">Job Location<span
                            class="text-xs">(optional)</span></label>
                </div>
                <div class="w-1/2">

                </div>
            </div>

            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit" name="submit"
                    id="">

            </div>
        </form>
    </div>

@endsection
