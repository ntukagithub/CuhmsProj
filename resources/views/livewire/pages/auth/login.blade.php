
<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();
    $role=Auth::user()->role;

    switch($role)
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

        case 'admin':
            $this->redirectIntended(default: route('admin', absolute: false), navigate: true);  
        break;

        case 'Electrical_engineering':
            $this->redirectIntended(default: route('electrical_engineering', absolute: false), navigate: true);  
        break;
        default:
        return redirect('/');

    }

   
};

?>





<div class="col-start-2 col-end-3">  <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    
    <form wire:submit="login" class="pt-[70px]">
        <!-- Email Address -->

        <div class="text-3xl text-center font-extrabold bg-gray-900  py-2 px-2 w-[200px] text-white mx-auto mb-[30px] mt-[20px] rounded">LOGIN</div>

        <div class="border-2 border-gray-900 rounded-md p-5 w-full mb-7">
        <div>
            <x-input-label for="email" :value="__('Email') "  />
            <x-text-input wire:model="form.email" id="email"  class="block mt-1 w-full bg-gray-900 text-white" type="email" name="email" placeholder="your email..."  required autofocus autocomplete="username"  />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"  />
        
            <x-text-input  wire:model="form.password" id="password" class="block mt-1 w-full bg-gray-900 text-white" placeholder="your passwrd... "
                            type="password"
                            
                            name="password"
                            required autocomplete="current-password"  /> 

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3  ">
                <b class="">Log In</b>
            </x-primary-button>
        
    </form>
    </div>
</div>
