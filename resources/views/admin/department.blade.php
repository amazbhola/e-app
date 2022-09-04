@extends('admin.layouts.master')

@section('content')

<div class="flex justify-between">
    <h1 class="font-semibold text-lg text-gray-800 drop-shadow-md">Department</h1>
    <a class="px-3 py-1 bg-gray-700 hover:bg-gray-900 text-gray-100" href="{{ route('department.edit',$department->id) }}">Update Department</a>

</div>



{{-- @foreach ($departments as $department) --}}
<div>
    <header class="flex justify-center items-center gap-4">
        <div class="">
            <img class="scale-1 shadow-md rounded-full w-28 h-28 object-cover" style="" src="{{ Storage::url($department->logo) }}" alt="">
        </div>
        <div class="">
            <h4 class="text-center font-bold uppercase drop-shadow-md text-3xl mt-4">{{ $department->name }}</h4>
        </div>
    </header>
    <div class="mt-20 flex items-center gap-4 justify-around">
        <div class="space-y-6">
            <p class="text-xl">Address : {{ $department->address }}</p>
            <p class="text-xl">Email : {{ $department->email }}</p>
            <p class="text-xl">Phone Number : {{ $department->phone }}</p>
            <p class="text-xl">Mobile Number : {{ $department->mobile }}</p>
            <p class="text-xl">Fax Number : {{ $department->fax }}</p>
        </div>
        <div class="space-y-6">
            <p class="text-xl">TIN No : {{ $department->tin_no }}</p>
            <p class="text-xl">BIN No : {{ $department->vat_no }}</p>
            <p class="text-xl">Department Registration No : {{ $department->reg_no }}</p>
            <p class="text-xl">Trade License No : {{ $department->trade_license_no }}</p>
            <p class="text-xl">Department Logo : {{ $department->logo }}</p>
        </div>
    </div>
</div>
{{-- @endforeach --}}
@endsection
