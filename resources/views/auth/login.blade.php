@include('partials._meta')
@include('partials._styles')

<div class="h-screen flex items-center justify-center">
    <div class="w-full md:w-2/6 mx-auto bg-gray-700 pb-6 shadow-xl m-10">
        <div class="">
            <h2 class="py-4 font-semibold text-2xl text-center text-gray-100 drop-shadow-xl underline">Login</h2>
            <hr>
        </div>
        <form action="{{ route('user.index') }}" method="get" class="mt-8">
            @csrf

            <div class="px-4 py-2 w-full flex flex-col  gap-4">
                <div class="w-full">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Email, Phone, or Username" type="text" name="identifier" id="identifier"
                        value="">
                    <label class="capitalize text-gray-100 text-sm" for="identifier">Email</label>
                </div>
                <div class="w-full">
                    <input
                        class="py-1 px-0 w-full bg-gray-700 text-gray-100 border-0 border-b-2 border-gray-200 appearance-none focus:outline-none ring-0 peer"
                        placeholder="Password" type="password" name="password" id="password" value="">
                    <label class="capitalize text-gray-100 text-sm " for="phone">password </label>
                </div>
            </div>


            <div class="px-4 py-2 w-full">
                <input class="px-4 py-2 shadow-md bg-gray-800 text-gray-100 hover:bg-gray-900" type="submit"
                    value="Login">

            </div>
        </form>
        <div class="px-4 py-2 flex justify-between">
            <a class="text-gray-100 font-thin px-2 py-0 shadow bg-green-700 hover:bg-gray-900"
                href="{{ route('auth.create') }}">Create an account - For Register ...</a>
            <a class="text-gray-100 font-thin px-2 py-0 shadow bg-purple-700 hover:bg-gray-900"
                href="{{ route('auth.create') }}">Forgot Passowrd ...</a>
        </div>
    </div>

</div>
