<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
})->name('login');


Route::get('/signup', function(){
    return view('Signup');
})->name('signup');

Route::get('/admin', function(){
    return view('admin');
})->name('admin');

Route::get('/user', function(){
    return view('user');
})->name('user');

Route::get('/alldrivers', function(){
    return view('alldrivers');
})->name('alldrivers');

Route::get('/allpassangers', function(){
    return view('allpassangers');
})->name('allpassangers');

Route::get('/adminprofil', function(){
    return view('adminprofil');
})->name('adminprofil');

Route::get('/MyProfil', function(){
    return view('MyProfil');
})->name('MyProfil');

