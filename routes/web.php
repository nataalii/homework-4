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
    return 'Welcome!';
});

Route::get('/protected-route', function() {
    return "You have acces on this page! ";
})->middleware('secure');


Route::get('/error', function() {
    return "you don't have acccess on this page!";
})->name('error');

