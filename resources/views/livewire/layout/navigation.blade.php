<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white " style="background-color: #1111;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center  transform transition duration-500 hover:transform hover:rotate-[360deg]">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 " />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @role('super-admin')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.user-index')" :active="request()->routeIs('admin.user-index')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Users') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.question-index')" :active="request()->routeIs('admin.question-index')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Questions') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.question-categories')" :active="request()->routeIs('admin.question-categories')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Q-Categories') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.question-levels')" :active="request()->routeIs('admin.question-levels')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Q-Levels') }}
                    </x-nav-link>
                    @endrole

                    @role('client')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('client.score-index')" :active="request()->routeIs('client.score-index')" wire:navigate class=" text-white mb-2 sm:mb-0 me-0 sm:me-4 font-semibold hover:text-cyan-300">
                        {{ __('Score Card') }}
                    </x-nav-link>

                    @endrole
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-#1B1A55 hover:text-cyan-300 focus:outline-none transition ease-in-out duration-150">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link 
                :href="route('dashboard')" 
                :active="request()->routeIs('dashboard')" 
                :class="request()->routeIs('dashboard') ? 'text-black' : 'text-white'" 
                wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link 
                :href="route('client.score-index')" 
                :active="request()->routeIs('client.score-index')" 
                :class="request()->routeIs('client.score-index') ? 'text-black' : 'text-white'" 
                wire:navigate>
                {{ __('Score Card') }}
            </x-responsive-nav-link>
        </div>
        

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
