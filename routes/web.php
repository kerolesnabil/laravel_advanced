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


Route::get('/form',[\App\Http\Controllers\HomeController::class,'form']);
Route::post('/store',[\App\Http\Controllers\HomeController::class,'store']);

Route::get('/',function (){
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('testEvent',function (){
   event(new \App\Events\event1('how are you'));
});

Route::get('sendMail',function (){

    dispatch(new \App\Jobs\SendEmailMailable());

    return 'dispatch run';
});

