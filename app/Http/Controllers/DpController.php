<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DpController extends Controller
{
    public function receive()
    {

        $data = User::find(auth()->id()); // Assuming you fetch user data
        return view('navig', ['user' => $data]);
    }
}
