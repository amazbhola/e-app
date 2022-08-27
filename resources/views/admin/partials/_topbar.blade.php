    {{-- topbar --}}
    <div class="md:pl-80 pr-8 bg-gray-700 h-16 shadow-sm flex items-center justify-between">
        <div class="cursor-pointer p-6 flex md:hidden items-center" id="hambarg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
              </svg>

        </div>
        <div class="hidden md:block">
            <a href="{{route('user.index')}}"><h2 class="font-bold text-gray-100">Logo</h2></a>
        </div>
        <div class="hidden md:flex">
            <div><img class="rounded-full shadow w-12 h-12 border-2 hover:border-4 border-blue-700" src="https://i.pravatar.cc/150?img=2" alt="Avater"></div>
        </div>
    </div>
