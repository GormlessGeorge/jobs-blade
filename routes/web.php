<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['jobs' => [
        ['title' => 'Director', 'salary' => '$10.000'],
        ['title' => 'Programmer', 'salary' => '$5.000'],
        ['title' => 'Teacher', 'salary' => '$3.000']
    ]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
