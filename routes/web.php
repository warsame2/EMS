<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CurdController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\PagesController;
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

//Route::resource('/',CurdController::class);



//Route::get('/login', [AuthController::class , 'login']);

//Route::get('/registration', [AuthController::class, 'registration']);



Route::get('users' , [PagesController::class , 'users']  )-> middleware('islogin'); 

Route::get('profile' , [PagesController::class , 'profile']  )-> middleware('islogin'); 

Route::POST('users/insert' , [PagesController::class , 'insert']) -> name('user.insert');


Route::get('/',[AuthController::class , 'login'])->middleware('alreadylogin');
Route::post('/login-users' , [AuthController::class , 'loginUser']) -> name('login-users');

Route::get('welcom' , [PagesController::class , 'dashbord']  )-> middleware('islogin');

Route::get('/logout',[AuthController::class , 'logout']);
