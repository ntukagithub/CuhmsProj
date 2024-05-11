<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class EditController extends Controller
{
    public function show($id)
    {
        $data = User::find($id);
        return view('adminedit', compact('data'));
    }


public function update(Request $request,$id)
    {
       $data=User::find($id);
       $data->name=$request->input('name');
       $data->email=$request->input('email');
       $data->role=$request->input('role');
       $data->update();
    return redirect('/');
    }
}
