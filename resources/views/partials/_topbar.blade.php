<div class=" w-full flex px-6 justify-around py-6">
    <div>
        <h2>logo</h2>
    </div>
    <div>
        @guest
            <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('login') }}">Login</a>
            <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('register') }}">Sign Up</a>
        @endguest

    </div>
</div>
<hr>
