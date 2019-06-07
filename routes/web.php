<?php

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

/*Route::get('/', function () {
    return view('form');
});*/

// Route::post('register','Register@create')->name('test');

Route::resource('form', 'Register');

/*Route::get('/hellos	',function(){
    return view('alert');
});*/
Route::resource('photos', 'PhotoController');

Route::get('/hellos', function () {
    return view('hello', ['name' => 'Neela','Age' => 22,'email' =>'test@gmail.com']);
});

/*Route::view('/hellos','hello');		
*/
/*Route::get('/hellos', function () {
    return view('hello');
})->name('profile');*/
/*Route::redirect('/hello','/welcome'	);*/