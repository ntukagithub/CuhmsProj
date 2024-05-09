<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;

class UpdateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' =>'required',
            'image' =>'required'
        ]);

        // dd($request->image);
        $update = new Update();
        $update->content = $request->content;
        $update->image = $request->image;
        $update->save();

        return redirect()->route('post');
    }
}
