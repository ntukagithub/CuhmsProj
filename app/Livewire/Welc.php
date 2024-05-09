<?php

namespace App\Livewire;

use Livewire\Component;

class Welc extends Component
{
    public function render()
    {
        return view('livewire.welc');
    }


    // public function mounted()
    // {
    //     if (session('shouldRefreshWelcome')) {
    //         session()->forget('shouldRefreshWelcome');
    //         // Fetch data or perform actions for refresh here
    //     }
    // }


}
