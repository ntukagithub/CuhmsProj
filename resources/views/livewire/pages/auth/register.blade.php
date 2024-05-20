
            
<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'email' => '',
    'role' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'role' => ['required','string'],
    'password' => ['required', 'string','confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $role=$validated['role'];

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    // $role=Auth::user()->role;

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

        case 'admin':
            $this->redirectIntended(default: route('admin', absolute: false), navigate: true);  
        break;
        
        case 'Law':
            $this->redirectIntended(default: route('law', absolute: false), navigate: true);  
        break;

        case 'Electrical_engineering':
            $this->redirectIntended(default: route('electrical_engineering', absolute: false), navigate: true);  
        break;

        default:
        return redirect()->route('login');

    }

    
};

?>


<div>
<div class="text-xl text-center font-extrabold bg-gray-900  py-2 px-2 w-[150px] text-white mx-auto mb-[10px] mt-[10px] rounded">REGISTER</div>


    <form wire:submit="register">
        <!-- Name -->
       
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" placeholder="your name..." class="block w-full bg-gray-900 text-white " type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" placeholder="your email..." id="email" class="block  w-full bg-gray-900 text-white" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
  <x-input-label for="role" :value="__('Proffesional')" />
  <select wire:model="role" id="role" name="role" class="block pt-2 pb-2  w-full py-2  rounded bg-gray-900 text-white border pl-5 border-white" >
    <option value="" class="">-- Select your profesional --</option>
    <option value="IT" class="">IT</option>
    <option value="Procurement">Procurement</option>
    <!-- <option value="Computer_science">Computer_science</option> -->
    <option value="marketing">marketing</option>
    <option value="admin">admin</option>
    <option value="B_administration">B_Administration</option>
    <option value="Accountancy">Accountancy</option>
    <option value="BA_HR">BA_HR</option>
    <option value="Civil_engineering">Civil_engineering</option>`
    <option value="Clinical_medicine">Clinical_medicine</option>
    <option value="Laboratory_engineering">Laboratory_engineering</option>
    <option value="Tourism">Tourism</option>
    <option value="Law">Law</option>
    <option value="Electrical_engineering">Electrical_engineering</option>
    

  </select>

  <x-input-error :messages="$errors->get('role')" class="mt-2" />
  </div >

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" placeholder="your password..." class="block mt-1 w-full bg-gray-900 text-white"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

  


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" placeholder="confirm......." id="password_confirmation" class="block mt-1 w-full bg-gray-900 text-white"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
         
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    
</div>