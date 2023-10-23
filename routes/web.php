<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');
Route::view('teegreat', 'landingpage')->name('teegreat');
Route::view('admin', 'adminlanding')->name('admin');
Route::view('sportadmin', 'sportsadminroute')->name('sportadmin');
Route::view('musicadmin', 'musicadminroute')->name('musicadmin');
Route::view('newsadmin', 'newsadminroute')->name('newsadmin');

Route::view('storyline/{id}', 'storypage');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard'); 

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php'; 
