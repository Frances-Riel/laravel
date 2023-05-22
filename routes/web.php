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
    echo 'need sleep';
})->name('welcome');

Route::get('/profile', function(){
    return view('profile');
    //echo 'you are now in profile,';
})->name('profile');
Route::get('/Appetino', function(){
    //echo 'you are now in Appetino,';
    return view('Appetino');
})->name('Appetino');
Route::get('/McDo', function(){
   // echo 'you are now in McDo,';
   return view('McDo');
})->name('McDo');
Route::get('/SM', function(){
    //echo 'you are now in SM,';
    return view('SM');
})->name('SM');
Route::get('/hi', function(){
    //echo 'you are now in SM,';
    return view('hi');
})->name('hi');

