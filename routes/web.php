<?php

use App\Http\Controllers\BackOfficeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', function () {
    return view('article');
})->middleware('isConnected');

Route::get('/backoffice',[BackOfficeController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


