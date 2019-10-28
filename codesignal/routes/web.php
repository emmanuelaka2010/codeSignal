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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/arcade', function () {
    return view('arcade');
});

Route::get('/arcade/intro', function () {
    return view('arcade_intro');
});

Route::get('/signup', function () {
    return view('sign_up');
});

Route::get('/code', function () {
    return view('code');
});

Route::get('/exercice', function () {
    return view('exercice');
});