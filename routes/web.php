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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/sendmail', function () {
    return view('sendmail');
})->middleware(['auth'])->name('sendmail');

Route::get('/showmail', function () {
    return view('show-sent-mail');
})->middleware(['auth'])->name('showmail');
// Route::livewire('showmail', '');

require __DIR__.'/auth.php';
