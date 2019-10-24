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

Route::get('/', function () {
	$listesclients = App\Client::all();
	//dd($listesclients);
    return view('index',compact('listesclients'));
});

Route::resource('client','ClientController');
