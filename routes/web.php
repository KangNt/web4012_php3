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
use App\Models\User;

Route::get('welcome', function () {
    return view('welcome');

});

 Route::get('route-starter',function(){
     $users = factory(User::class,10)
     ->make()
     ->toArray();
     
     return view('starter', [
        'users' => $users
    ]);
 });
