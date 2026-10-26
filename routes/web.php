<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('post');
});

Route::get('/courses', function () {
    return view('course');
});

Route::get('/reviews', function () {
    return view('review');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/signup', function () {
    return view('auth.signup');
});
