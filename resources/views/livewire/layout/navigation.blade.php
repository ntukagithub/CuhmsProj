<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Session;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>

<nav x-data="{ open: false }" class="text-white  bg-yellow-500">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-[8vh] ">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                
                    <!-- <div class="w-[32px] h-[32px] bg-gray-900 mt-[12px] border border-white rounded-full absolute right-[210px] overflow-hidden">
                        <img src="photos/joel.jpg" alt="" width="300px" height="300px">
                    </div> -->

                    <!-- <div class="w-[32px] h-[32px]  mt-[12px]  absolute right-[30px] overflow-hidden">
                        <img src="photos/notification.png" alt="" width="300px" height="300px">
                    </div> -->
                    
                    

                <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex text-white">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    <b class="text-gray-900">Dashboard</b>
                    </x-nav-link>
                </div>

                <!-- <script>
                function getDashboardUrl() {
                    const userRole = @json(Auth::user()->role);
                    // $role=Auth::user()->role;

                    switch(userRole)
                    {
                        case 'IT':
                        $this->redirectIntended(default: route('it', absolute: false), navigate: true);  
                        break;

                        case 'Procurement':
                        $this->redirectIntended(default: route('procurement', absolute: false), navigate: true);  
                        break;

                        case 'Computer_science':
                            $this->redirectIntended(default: route('computer_science', absolute: false), navigate: true);  
                        break;

                        case 'marketing':
                            $this->redirectIntended(default: route('marketing', absolute: false), navigate: true);  
                        break;

                        case 'B_administration':
                            $this->redirectIntended(default: route('b_administration', absolute: false), navigate: true);  
                        break;

                        case 'Accountancy':
                            $this->redirectIntended(default: route('accountancy', absolute: false), navigate: true);  
                        break;

                        case 'BA_HR':
                            $this->redirectIntended(default: route('ba_hr', absolute: false), navigate: true);  
                        break;

                        case 'Civil_engineering':
                            $this->redirectIntended(default: route('civil_engineering', absolute: false), navigate: true);  
                        break;

                        case 'Clinical_medicine':
                            $this->redirectIntended(default: route('clinical_medicine', absolute: false), navigate: true);  
                        break;

                        case 'Laboratory_engineering':
                            $this->redirectIntended(default: route('laboratory_engineering', absolute: false), navigate: true);  
                        break;

                        case 'Tourism':
                            $this->redirectIntended(default: route('tourism', absolute: false), navigate: true);  
                        break;

                        case 'Law':
                            $this->redirectIntended(default: route('law', absolute: false), navigate: true);  
                        break;

                        case 'Electrical_engineering':
                            $this->redirectIntended(default: route('electrical_engineering', absolute: false), navigate: true);  
                        break;

                        default:
                        return redirect('/');

                    }

                    return dashboardUrl;
                }
                </script> -->

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
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
