<x-app-layout>
    <x-slot name="header" >
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}" >

        <h2 class="font-semibold text-xl  text-gray-800 leading-tight ">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[600px] mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- <a href="{{route('dp')}}"><div class="border  rounded-lg w-[170px] text-center py-3 px-2 text-white font-extrabold hover:bg-white hover:text-gray-900  duration-300"> <i class="fa-solid fa-user pr-2"></i>Profile Picture</div></a> -->
            <div class="p-4 sm:p-8 bg-gray-400 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-gray-400 text-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-gray-400 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
