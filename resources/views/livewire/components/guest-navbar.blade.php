<div class="navbar bg-base-100 sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-80 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)]">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a>Item 1</a></li>
                <li><a>Petunjuk</a></li>
                <li><a>Pengembang</a></li>
            </ul>
        </div>
        <a data-sveltekit-preload-data href="/" aria-current="page" aria-label="daisyUI"
            class="flex-0 btn btn-ghost gap-1 px-2 md:gap-2"><svg class="h-6 w-6 md:h-8 md:w-8" width="32"
                height="32" viewBox="0 0 415 415" xmlns="http://www.w3.org/2000/svg">
                <rect x="82.5" y="290" width="250" height="125" rx="62.5" fill="#1AD1A5">
                </rect>
                <circle cx="207.5" cy="135" r="130" fill="black" fill-opacity=".3">
                </circle>
                <circle cx="207.5" cy="135" r="125" fill="white"></circle>
                <circle cx="207.5" cy="135" r="56" fill="#FF9903"></circle>
            </svg> <span class="font-title text-base-content text-lg md:text-2xl">Encrypt-Decrypt</span>
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        {{-- <ul class="menu menu-horizontal px-1 text-lg">
            <li>
                <x-navbar-item url="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                    Home
                </x-navbar-item>
            </li>
        </ul> --}}
    </div>
    <div class="navbar-end lg:me-5">
        {{-- <a class="btn btn-primary btn-sm" href="{{ url('login') }}">Login</a> --}}
    </div>
</div>
