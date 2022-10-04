    {{-- topbar --}}

    <div class="md:pl-80 pr-8 bg-gray-700 h-16 shadow-sm flex items-center justify-between">
        <div class="cursor-pointer p-6 flex md:hidden items-center" id="hambarg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
            </svg>

        </div>
        <div class="hidden md:block">
            <a href="{{ route('user.index') }}">
                <h2 class="font-bold text-gray-100">Logo</h2>
            </a>
        </div>
        <div class="hidden md:flex">

            <div>
                <div class="dropdown-menu dropdown-menu-end text-gray-100 flex gap-2" aria-labelledby="navbarDropdown">

                    <div class="capitalize">Hello {{ Auth::user()->name }}</div>

                    <a class="dropdown-item flex gap-1 hover:text-red-600" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
