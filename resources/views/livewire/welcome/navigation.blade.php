<div x-data="{ open: false }" class="sm:fixed sm:top-0 sm:right-0 text-end z-10 w-full  md:pl-24  lg:pl-24 "  style="background-color: #1B1A55;">
    <!-- Hamburger Button (visible on small screens) -->
    <div class="sm:hidden flex justify-between items-center p-4">
        <div class="shrink-0">
            {{-- <a href="{{ route('dashboard') }}" wire:navigate>
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a> --}}
        </div>
        <button @click="open = !open" class="text-gray-100 focus:outline-none">
            <!-- Icon: Hamburger or X -->
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Dropdown Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:flex sm:flex-row sm:justify-between mt-4 sm:mt-0">
        <!-- Left-aligned links -->
        <div class="flex flex-col sm:flex-row items-center text-gray-50  text-base ">
            <div class="shrink-0 flex items-center me-0 sm:me-4 mb-4 sm:mb-0 md:pr-4 lg:pr-4">
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>
            <a href="#section1" class="mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">Home</a>
            <a href="#section2" class="mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300 px-8">About</a>
            <a href="#section3" class="mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">Contact</a>
        </div>

        <!-- Right-aligned links -->
        <div class="flex flex-col sm:flex-row justify-end items-center md:pr-8  lg:pr-8">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-50 hover:text-cyan-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mb-2 sm:mb-0" wire:navigate>Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-50 hover:text-cyan-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mb-2 sm:mb-0 me-0 sm:me-4" wire:navigate>Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="font-semibold text-gray-50 hover:text-cyan-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                @endif
            @endauth
        </div>
    </div>
</div>
