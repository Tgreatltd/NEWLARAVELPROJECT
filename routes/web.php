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

// user pages routes

Route::view('/', 'welcome');
Route::view('teegreat', 'landingpage')->name('teegreat');
Route::view('musicpage', 'musicpage')->name('musicpage');
Route::view('newspage', 'newspage')->name('newspage');
Route::view('sportpage', 'sportpage')->name('sportpage');

Route::view('storyline/{id}', 'storypage')->name('storyline');
Route::view('music/{id}', 'contentmusicpage')->name('music');
Route::view('news/{id}', 'contentnewspage')->name('news');
Route::view('sport/{id}', 'contentsportpage')->name('sport');

// admin pages routes

Route::view('admin', 'storiesadminroute')
->middleware(['auth', 'verified'])
->name('admin');

Route::view('sportadmin', 'sportsadminroute')
->middleware(['auth', 'verified'])
->name('sportadmin'); 

Route::view('musicadmin', 'musicadminroute')
->middleware(['auth', 'verified'])
->name('musicadmin');

Route::view('newsadmin', 'newsadminroute')
->middleware(['auth', 'verified'])
->name('newsadmin');


// editing adminpage routes
Route::view('storyedit/{id}', 'editStoriesadmin') 
 ->middleware(['auth', 'verified'])
 ->name('storyedit');

 Route::view('sportedit/{id}', 'editsportadmin')
->middleware(['auth', 'verified'])
->name('sportedit');

Route::view('musicedit/{id}', 'editMusicAdmin')
->middleware(['auth', 'verified'])
->name('sportedit');

Route::view('newsedit/{id}', 'editNewsAdmin')
->middleware(['auth', 'verified'])
->name('newsedit');

// Route::get('storyedit/{id}', function ($id) {
//     return view('editStoriesadmin',compact('id'));
// })->name('storyedit');



// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard'); 

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php'; 
