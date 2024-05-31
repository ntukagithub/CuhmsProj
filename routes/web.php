<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Models\Itpost;
use App\Models\accountancyposts;
use App\Models\electrical_engineeringposts;
use App\Models\civil_engineeringposts;
use App\Models\mechanical_engineeringposts;
use App\Models\procurementposts;
use App\Models\ba_hrposts;
use App\Models\lawposts;
use App\Models\marketposts;
use App\Models\b_administrationposts;
use App\Models\tourismposts;
use App\Models\laboratory_engineeringposts;
use App\Models\clinical_medicineposts;
use App\Models\User;
use App\Http\Controllers\DpController;

use App\Models\Itqnn;
use App\Models\Accountqnn;
use App\Models\Electrical_engineeringqnn;
use App\Models\Civil_engineeringqnn;
use App\Models\Procurementqnn;
use App\Models\Ba_hrqnn;
use App\Models\Lawqnn;
use App\Models\Marketingqnn;
use App\Models\B_administrationqnn;
use App\Models\Tourismqnn;
use App\Models\Laboratory_engineeringqnn;
use App\Models\Clinical_medicineqn;
use App\Models\Collaboration;
use App\Models\Inform;
use App\Models\Archived;





Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('admin', 'admin')
//     ->middleware(['auth', 'verified','admin'])
//     ->name('admin');

// Route::view('it', 'it')
//     ->middleware(['auth', 'verified','it'])
//     ->name('it');

Route::get('/it', function ()  {
    //  $data=Collaboration::whereNull('created_at')->count();
    //  dd($data);
    return view('it');
})->middleware(['auth', 'verified','it'])
->name('it');

Route::view('procurement', 'procurement')
    ->middleware(['auth', 'verified','procurement'])
    ->name('procurement');

Route::view('computer_science', 'computer_science')
    ->middleware(['auth', 'verified','computer_science'])
    ->name('computer_science');

Route::view('marketing', 'marketing')
    ->middleware(['auth', 'verified','marketing'])
    ->name('marketing');

Route::view('b_administration', 'b_administration')
    ->middleware(['auth', 'verified','b_administration'])
    ->name('b_administration');

Route::view('accountancy', 'accountancy')
    ->middleware(['auth', 'verified','accountancy'])
    ->name('accountancy');

Route::view('ba_hr', 'ba_hr')
    ->middleware(['auth', 'verified','ba_hr'])
    ->name('ba_hr');

Route::view('civil_engineering', 'civil_engineering')
    ->middleware(['auth', 'verified','civil_engineering'])
    ->name('civil_engineering');

Route::view('clinical_medicine', 'clinical_medicine')
    ->middleware(['auth', 'verified','clinical_medicine'])
    ->name('clinical_medicine');

Route::view('laboratory_engineering', 'laboratory_engineering')
    ->middleware(['auth', 'verified','laboratory_engineering'])
    ->name('laboratory_engineering');

Route::view('tourism', 'tourism')
    ->middleware(['auth', 'verified','tourism'])
    ->name('tourism');

Route::view('law', 'law')
    ->middleware(['auth', 'verified','law'])
    ->name('law');

Route::view('electrical_engineering', 'electrical_engineering')
    ->middleware(['auth', 'verified','electrical_engineering'])
    ->name('electrical_engineering');

Route::view('admin', 'admin')
    ->middleware(['auth', 'verified','admin'])
    ->name('admin');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/posts', function () {
    return view('posts');
})->middleware(['auth', 'verified','it'])
->name('posts');


//it
Route::post('/posts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Itpost();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/posts');
});

Route::get('/posts', function () {
    $data=Itpost::all();
    return view('posts',compact('data'));
})->middleware(['auth', 'verified','it'])
->name('posts');



//marketing
Route::post('/marketposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Itpost();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/marketposts');
});

Route::get('/marketposts', function () {
    $data=Itpost::all();
    return view('marketposts',compact('data'));
})->middleware(['auth', 'verified','marketing'])
->name('marketposts');


//accountancy
Route::post('/accountposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Accountancyposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/accountposts');
});

Route::get('/accountposts', function () {
    $data=Accountancyposts::all();
    return view('accountposts',compact('data'));
})->middleware(['auth', 'verified','accountancy'])
->name('accountposts');

//b_administration
Route::post('/b_administrationposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new B_administrationposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/b_administrationposts');
});

Route::get('/b_administrationposts', function () {
    $data=B_administrationposts::all();
    return view('b_administrationposts',compact('data'));
})->middleware(['auth', 'verified','b_administration'])
->name('b_administrationposts');


//ba_hr
Route::post('/ba_hrposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new  Ba_hr();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/ba_hrposts');
});

Route::get('/ba_hrposts', function () {
    $data=Ba_hr::all();
    return view('ba_hrposts',compact('data'));
})->middleware(['auth', 'verified','ba_hr'])
->name('ba_hrposts');

//civil_engineering
Route::post('/civil_engineeringposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Civil_engineeringposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/civil_engineeringposts');
});

Route::get('/civil_engineeringposts', function () {
    $data=Civil_engineeringposts::all();
    return view('civil_engineeringposts',compact('data'));
})->middleware(['auth', 'verified','civil_engineering'])
->name('civil_engineeringposts');

//clinical_medicine
Route::post('/clinical_medicineposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Clinical_medicineposts();
    $data->content=request('content');
    $data->image=request('content');
    $data->save();

    return redirect('/clinical_medicineposts');
});

Route::get('/clinical_medicineposts', function () {
    $data=Clinical_medicineposts::all();
    return view('clinical_medicineposts',compact('data'));
})->middleware(['auth', 'verified','clinical_medicine'])
->name('clinical_medicineposts');

//electrical_engineering
Route::post('/electrical_engineeringposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Electrical_engineeringposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/electrical_engineeringposts');
});

Route::get('/electrical_engineeringposts', function () {
    $data=Electrical_engineeringposts::all();
    return view('electrical_engineeringposts',compact('data'));
})->middleware(['auth', 'verified','electrical_engineering'])
->name('electrical_engineeringposts');


//laboratory_engineering
Route::post('/laboratory_engineeringposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Laboratory_engineeringposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/laboratory_engineeringposts');
});

Route::get('/laboratory_engineeringposts', function () {
    $data=Laboratory_engineeringposts::all();
    return view('laboratory_engineeringposts',compact('data'));
})->middleware(['auth', 'verified','laboratory_engineering'])
->name('laboratory_engineeringposts');


//law
Route::post('/lawposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Lawposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/lawposts');
});

Route::get('/lawposts', function () {
    $data=lawposts::all();
    return view('lawposts',compact('data'));
})->middleware(['auth', 'verified','law'])
->name('lawposts');


//marketing
Route::post('/marketposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Marketposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/marketposts');
});

Route::get('/marketposts', function () {
    $data=Marketposts::all();
    return view('marketposts',compact('data'));
})->middleware(['auth', 'verified','marketing'])
->name('marketposts');


//procurement
Route::post('/procurementposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Procurementposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/procurementposts');
});

Route::get('/procurementposts', function () {
    $data=Procurementposts::all();
    return view('procurementposts',compact('data'));
})->middleware(['auth', 'verified','procurement'])
->name('procurementposts');


//tourism
Route::post('/tourismposts', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Tourismposts();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/tourismposts');
});

Route::get('/tourismposts', function () {
    $data=Tourismposts::all();
    return view('tourismposts',compact('data'));
})->middleware(['auth', 'verified','tourism'])
->name('tourismposts');

//dp

Route::get('/dp', function () {
    return view('dp');
})->middleware(['auth', 'verified'])
->name('dp');


//itqn
Route::get('/itqn', function () {
    $data=Itqnn::all();
    return view('itqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('itqn');

Route::post('/itqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Itqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/itqn');
});

Route::get('/accountancyqn', function () {
    $data=Accountqnn::all();
    return view('accountancyqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('accountancyqn');

Route::post('/accountancyqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Accountqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/accountancyqn');
});

Route::get('/b_administrationqn', function () {
    $data=B_administrationqnn::all();
    return view('b_administrationqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('b_administrationqn');

Route::post('/b_administrationqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new b_administrationqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/b_administrationqn');
});

Route::get('/ba_hrqn', function () {
    $data=Ba_hrqnn::all();
    return view('ba_hrqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('ba_hrqn');

Route::post('/ba_hrqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Ba_hrqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/ba_hrqn');
});


Route::get('/civil_engineeringqn', function () {
    $data=civil_engineeringqnn::all();
    return view('civil_engineeringqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('civil_engineeringqn');

Route::post('/civil_engineeringqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new civil_engineeringqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/civil_engineeringqn');
});


Route::get('/clinical_medicineqn', function () {
    $data=Clinical_medicineqn::all();
    return view('clinical_medicineqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('clinical_medicineqn');

Route::post('/clinical_medicineqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new clinical_medicineqn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/clinical_medicineqn');
});

Route::get('/electrical_engineeringqn', function () {
    $data=Electrical_engineeringqnn::all();
    return view('electrical_engineeringqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('electrical_engineeringqn');

Route::post('/electrical_engineeringqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Electrical_engineeringqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/electrical_engineeringqn');
});

Route::get('/laboratory_engineeringqn', function () {
    $data=Laboratory_engineeringqnn::all();
    return view('laboratory_engineeringqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('laboratory_engineeringqn');

Route::post('/laboratory_engineeringqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Laboratory_engineeringqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/laboratory_engineeringqn');
});

Route::get('/lawqn', function () {
    $data=Lawqnn::all();
    return view('lawqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('lawqn');

Route::post('/lawqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Lawqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/lawqn');
});

Route::get('/marketingqn', function () {
    $data=Marketingqnn::all();
    return view('marketingqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('marketingqn');

Route::post('/marketingqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Marketingqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/marketingqn');
});

Route::get('/procurementqn', function () {
    $data=Procurementqnn::all();
    return view('procurementqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('procurementqn');


Route::post('/procurementqn', function () {

    // $val=request()->validate([
    //     'content' =>'required',
    //     'image' =>'required|image',
    // ]);

    $data=new Procurementqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/procurementqn');
});

Route::post('/tourismqn', function () {


    $data=new Tourismqnn();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/tourismqn');
});

Route::get('/tourismqn', function () {
    $data=Tourismqnn::all();
    return view('tourismqn',compact('data'));
})->middleware(['auth', 'verified'])
->name('tourismqn');


Route::get('/admin', function () {
    $data=User::all();
    $collaboration=Collaboration::all();
    $inform=Inform::all();
    $archive=Archived::all();
    return view('admin',compact('data','collaboration','inform','archive'));
})->middleware(['auth', 'verified','admin'])
->name('admin');

Route::get('/adminedit/{id}', function ($id) {
    return app('App\Http\Controllers\EditController')->show($id);
});

Route::put('/update/{id}', function ($id) {

    $data=User::find($id);
       $data->name=request('name');
       $data->email=request('email');
       $data->role=request('role');
    //    $data->password=request('password');
    //    $data->dp=request('dp');
       $data->update();
    return redirect('/admin#users');

});


Route::get('delete/{id}', function($id){

    $data = User::find($id);
    $data->delete();

    return redirect('/admin#users');
});

Route::post('/admin-create', function (Illuminate\Http\Request $request) {
    $validateddata=$request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|unique:users|max:255',
        'role'=>'required|string|max:255',
        'password=>required|string|min:8|',
    ]);



    $data=new User();
    $data->name=request('name');
    $data->email=request('email');
    $data->role=request('role');
    $data->password=bcrypt(request('password'));
    $data->save();

    return redirect('/admin#create');
});

Route::get('/collaboration', function () {
    $data=Collaboration::all();
    $inf=Inform::all();

    
    return view('collaboration',compact('data','inf'));
})->middleware(['auth', 'verified'])
->name('collaboration');

Route::post('/send-data', function () {

    $data=new Collaboration();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    return redirect('/collaboration');
});


Route::get('/delete/{id}', function($id){
   $coll=Collaboration::find($id);
   $coll->delete();

   return redirect('/admin#discussion');

});


//admin inform
Route::post('/submit-data', function () {

    $data=new Inform();
    $data->content=request('content');
    $data->image=request('image');
    $data->save();

    $archive=new Archived();
    $archive->content=request('content');
    $archive->image=request('image');
    $archive->save();

    return redirect('/admin#post');
});


Route::get('/deletemessage/{id}', function($id){
    $colls=Inform::find($id);
    $colls->delete();
 
    return redirect('/admin#post');
 
 });
 

 Route::get('/deletearchived/{id}', function($id){
    $colls=Archived::find($id);
    $colls->delete();
 
    return redirect('/admin#archive');
 
 });



require __DIR__.'/auth.php';
