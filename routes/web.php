<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CurdController;
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

Route::resource('welcome',CurdController::class);






Route::get('/', function () {
    return view('login');
});



Route::get('/forgot', function () {
    return view('forgot');
});

