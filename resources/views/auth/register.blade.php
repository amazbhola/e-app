@include('partials._meta')
@include('partials._styles')

<div class="h-screen flex items-center justify-center">
    <div class="w-full md:w-2/6 mx-auto bg-gray-700 pb-6 shadow-xl m-10">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl">Register</h2>
            <hr>
        </div>
        @foreach ($errors->all() as $error)
            <div class="text-red-600 drop-shadow-md bg-red-200 px-4 space-y-2">{{ $error }}</div>
        @endforeach
        <form action="{{ route('register') }}" method="post" class="mt-8">
            @csrf

            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Email" type="text" name="email" id="email" value="">
                    <label class="capitalize text-gray-100 text-sm" for="email">Email</label>
                </div>
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Phone" type="tel" maxlength="11" name="phone" id="phone" value="">
                    <label class="capitalize text-gray-100 text-sm " for="phone">Phone </label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="First Name" type="text" name="first_name" id="first_name" value="">
                    <label class="capitalize text-gray-100 text-sm" for="first_name">First Name</label>
                </div>
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Last Name" type="text" name="last_name" id="last_name" value="">
                    <label class="capitalize text-gray-100 text-sm " for="last_name">Last Name </label>
                </div>
            </div>
            <div class="px-4 py-2 w-full flex justify-between gap-4">
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Password" type="password" name="password" id="password" value="">
                    <label class="capitalize text-gray-100 text-sm" for="password">Password</label>
                </div>
                <div class="w-1/2">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Confirm Password" type="password" name="password_confirmation"
                        id="password_confirmation" value="">
                    <label class="capitalize text-gray-100 text-sm" for="password_confirmation">Confirm Password</label>
                </div>
            </div>

            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit"
                    value="Register">

            </div>
        </form>
        <div class="px-4 py-2">
            <a class="text-gray-100 font-semibold" href="{{ route('login') }}">Already has an account - For Login
                ...</a>
        </div>
    </div>

</div>
