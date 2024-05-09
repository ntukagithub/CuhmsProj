<?php

namespace App\Livewire;

use Livewire\Component;
// use App\Models\Update;

class Savecontent extends Component
{
    public $content;
    public $image;
    public function render()
    {
        return view('livewire.savecontent');
    }

    // public function store()
    // {


    //     $this->validate([
    //         'content'=>'required',
    //         'image'=>'required'

    //         ]);

    //         // dd($this->image);

    //         $update = new Update();
    //         $update->content=$this->content;
    //         $update->image=$this->image;
    //         $update->save();

    //         $this->content = '';
    //         $this->image = '';
    //         $this->emit('alert', ['type' =>'success','message' => 'Content has been saved']);

    //         return redirect()->route('post');
    // }
} 
