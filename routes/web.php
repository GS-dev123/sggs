<?php

use Illuminate\Support\Facades\Route;

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

 Route::get('/home1', function () {
    return view('home1');
});
/*
Route::get('/add_job', function () {
    return view('add_job');
});
Route::get('/add_hd', function () {
    return view('add_hd');
});
Route::get('/add_ram', function () {
    return view('add_ram');
});
Route::get('/add_desktop', function () {
    return view('add_desktop');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/add_pc', function () {
    return view('add_pc');
});
*/
Route::get('/show_ram/{id}/show','ramController@show')->name('ram.show');
Route::get('/ram/{id}/delete','ramController@destroy')->name('ram.destroy');
Route::get('/edit_ram/{id}/edit','ramController@edit')->name('ram.edit');
Route::get('/ram','ramController@index')->name('ram.index');
Route::post('/add_ram','ramController@store')->name('ram.store');
Route::PATCH('/ram/{id}/edit','ramController@update')->name('ram.update');
Route::get('/add_ram', function () {
    return view('add_ram');
});

//Hdd Controller
Route::post('/add_hd', 'hddController@store')->name('hdd.store');
Route::get('/hdd','hddController@index')->name('hdd.index');
Route::get('/show_hdd/{id}/show','hddController@show')->name('hdd.show');
Route::get('/hdd/{id}/delete','hddController@destroy')->name('hdd.delete');
Route::PATCH('/hdd/{id}/edit','hddController@update')->name('hdd.update');
Route::get('/edit_hdd/{id}/edit','hddController@edit')->name('hdd.edit');
Route::get('add_hd', function(){
return view('add_hd');
});


//LapTop
Route::post('/laptop','laptopController@store')->name('laptop.store');
Route::get('/laptop','laptopController@index')->name('laptop.index');
Route::get('laptop/{id}/delete','laptopController@destroy')->name('laptop.destroy');
Route::get('/edit_laptop/{id}/edit','laptopController@edit')->name('laptop.edit');
Route::PATCH('/laptop/{id}/update','laptopController@update')->name('laptop.update');
Route::get('/show_laptop/{id}/show','laptopController@show')->name('laptop.show');
Route::get('/add_laptop',  
   function (){
       return  view('add_laptop');
});
