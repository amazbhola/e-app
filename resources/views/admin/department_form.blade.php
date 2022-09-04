@extends('admin.layouts.master')

@section('content')
    <div class="w-full md:w-2/3 mx-auto bg-gray-700 pb-6 shadow-xl">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Update Department</h2>
            <hr>
        </div>
        <form action="{{ route('department.update',$department->id) }}" method="post" class="" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="px-4 py-2 w-full">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Department Name" type="text" name="name" id="name"
                    value="{{$department->name}}">
                <label class="capitalize text-gray-100 text-sm" for="name">Department Name</label>
            </div>
            <div class="px-4 py-2 w-full">
                <textarea
                    class="py-1 px-0 w-full bg-gray-600 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    name="address" id="address" cols="30" rows="3" placeholder="Address ...">{{$department->address}}</textarea>
                <label class="capitalize text-gray-100 text-sm" for="address">Address</label>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Email" type="text" name="email" id="email"
                    value="{{$department->email}}">
                    <label class="capitalize text-gray-100 text-sm" for="email">Email</label>
                </div>
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Fax" type="text" name="fax" id="fax"
                    value="{{$department->fax}}">
                    <label class="capitalize text-gray-100 text-sm " for="fax">Fax <span class="text-xs">(optional)</span></label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Phone" type="text" name="phone" id="phone"
                    value="{{$department->phone}}">
                    <label class="capitalize text-gray-100 text-sm" for="phone">Phone</label>
                </div>
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Mobile" type="text" name="mobile" id="mobile"
                    value="{{$department->mobile}}">
                    <label class="capitalize text-gray-100 text-sm" for="mobile">Mobile</label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Registration No" type="text" name="reg_no" id="reg_no"
                    value="{{$department->reg_no}}">
                    <label class="capitalize text-gray-100 text-sm" for="reg_no">Registration No <span class="text-xs">(optional)</span></label>
                </div>
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="Trade license no" type="text" name="trade_license_no" id="trade_license_no"
                    value="{{$department->trade_license_no}}">
                    <label class="capitalize text-gray-100 text-sm" for="trade_license_no">Trade license no <span class="text-xs">(optional)</span></label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="TIN No" type="text" name="tin_no" id="tin_no"
                    value="{{$department->tin_no}}">
                    <label class="capitalize text-gray-100 text-sm" for="tin_no">TIN No <span class="text-xs">(optional)</span></label>
                </div>
                <div class="w-1/2">
                    <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder="VAT no" type="text" name="vat_no" id="vat_no"
                    value="{{$department->vat_no}}">
                    <label class="capitalize text-gray-100 text-sm" for="vat_no">VAT No <span class="text-xs">(optional)</span></label>
                </div>
            </div>
            <div class="px-4 py-2 w-full">
                <img class="w-20 h-20 object-cover" src="{{ Storage::url($department->logo) }}" alt="">
                <input
                    class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                    placeholder=" logo" type="file" name="logo" id="logo" value="{{ old('logo') }}">
                <label class="capitalize text-gray-100 text-sm" for="logo">Logo </label>
            </div>
            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit" name="submit"
                    id="submit">
            </div>
        </form>
    </div>
@endsection
