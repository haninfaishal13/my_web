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

Route::get('/', function () {
    return view('welcome');
});

Route::get('wedding-invitation', function() {
    return view('wedding.hanin-dhila.index');
});
Route::get('wedding-invitation-v2', function() {
    return view('wedding.hanin-dhila.index-v2');
});
