<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//home
Route::view('/', 'home');


Route::resource('jobs', JobController::class);

//contact
Route::view('/contact', 'contact');


