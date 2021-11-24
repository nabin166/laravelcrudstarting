<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\username;
use App\Models\usernames;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('show.nameentry');
// });

// Route::resource('name', username::class);





// Route::post('name/store', [username::class,"store"]);
// Route::view('name/create', [username::class,"store"]);

// Route::get('name/create', [username::class,"index"]);

// Route::get('name/store', function(){
//     return view('show.create');
// });

// Route::resource('/', username::class);

Route::get('/',[username::class,'index']
);


Route::post('/name', [username::class, 'store']);

Route::get('/ind',[username::class,'index'] );

Route::get('/{id}',[username::class,'destroy']);
Route::get('update/{id}',[username::class,'inde']);


Route::get('updat/{id}',[username::class,'updatename']);

Route::POST('/upwork/{id}', [username::class,'upshow']);



// Route::get('/name', function(){
//     return view('show.create');
// });




// Route::get('/store', [username::class,'store']);
