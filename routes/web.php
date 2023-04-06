<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('songs', 'App\Http\Controllers\SongsController');

Route::get('/songs', [SongsController::class, 'index'])->name('songs.index');

Route::get('/songs/{id}', [SongController::class, 'show'])->name('songs.show');

Route::get('/songs/create', 'App\Http\Controllers\SongsController@create')->name('songs.create');

Route::get('/songs/{id}/edit', 'SongsController@edit');

Route::get('/songs/update', 'SongsController@update')->name('songs.update');

Route::delete('/songs/{id}', 'SongsController@destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';