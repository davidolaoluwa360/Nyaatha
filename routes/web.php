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
    return view('Home.home');
})->name('user.home.view');

Route::get('/Nyaatha.donate', function(){
    return view('Donate.index');
})->name('Donate.view');

Route::get('/Whoweserve', function(){
    return view('Who we serve.index');
})->name('Who.we.are.view');