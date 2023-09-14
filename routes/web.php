<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\poll_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[poll_controller::class,'register'])->name('register');
Route::post('/registration_detail',[poll_controller::class,'registration_detail']);
Route::get('/login',[poll_controller::class,'login'])->name('login');
Route::match(['get','post'],'/logindetail',[poll_controller::class,'logindetail']);
Route::get('/logout',[poll_controller::class,'logout']);

Route::get('/home',[poll_controller::class,'home'])->middleware('auth');
Route::get('/create_poll',[poll_controller::class,'create_poll']);
Route::match(['get','post'],'/poll_Q_save/{id?}',[poll_controller::class,'poll_Q_save']);
Route::match(['get','post'],'/poll__detail/{id?}',[poll_controller::class,'poll__detail']);
Route::match(['get','post'],'/poll_result_save/{id?}',[poll_controller::class,'poll_result_save']);
Route::match(['get','post'],'/poll_history',[poll_controller::class,'poll_history']);
