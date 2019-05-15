<?php

use App\Http\Controllers\HelloController;

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
    // it's welcome.blade.php
    return view('welcome');
});

Route::group(["prefix" => "hello"], function() {
    //requesting a new page
    Route::get( '/{name}', function ($name) {
        echo "Hello " . $name;
    });

    Route::get( '/there/{name}', "HelloController@hiThere");
});

