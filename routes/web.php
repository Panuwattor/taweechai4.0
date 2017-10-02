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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/babbaan', function () {
    return view('babbaan');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/we', function () {
    return view('we');
});
Route::get('/system', function () {
    return view('system');
});
Route::get('/question', function () {
    return view('question');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/prepare', function () {
    return view('prepare');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/test', function () {
    return view('test');
});
