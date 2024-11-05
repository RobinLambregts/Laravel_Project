<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\evenementenController;
use App\Http\Controllers\preasidiumController;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('voorpagina');
});
Route::get('/overOns', function () {
    return view('overOns');
});
Route::get('/preasidium', function () {
    return view('preasidium');
});
Route::get('/evenementen', function () {
    return view('evenementen');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/preasidium', [preasidiumController::class, 'index']);

Route::get('/evenementen', [evenementenController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/addEvent', [evenementenController::class, 'addEvent'])->name('addEvent');

Route::post('/updateEvent', [evenementenController::class, 'updateEvent'])->name('updateEvent');

Route::post('/deleteEvent', [evenementenController::class, 'deleteEvent'])->name('deleteEvent');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
