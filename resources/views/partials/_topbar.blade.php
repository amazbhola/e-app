<div class=" w-full flex px-6 justify-around py-6">
    <div>
        <h2>logo</h2>
    </div>
    @guest
        <div>
            <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('auth.index') }}">login</a>
            <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('auth.create') }}">Sign Up</a>

        </div>
        <div>
            <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('googleKeep.index') }}">Google
                Keep</a>


        </div>
    @endguest

    <div>
        <a class="bg-gray-800 text-gray-100 px-3 py-2 hover:bg-gray-900" href="{{ route('user.index') }}">Dashboard</a>
    </div>





</div>
<hr>
