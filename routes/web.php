<?php

use App\Http\Controllers\FlashcardsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('flashcards')->group(function() {
    Route::get('/',[FlashcardsController::class,'index'])->name('flashcards');
    Route::post('/store',[FlashcardsController::class,'store'])->name('flashcards.store');
});

Route::middleware('auth')->prefix('learn')->group(function() {
    Route::get('/',[FlashcardsController::class,'index'])->name('flashcards');
    Route::post('/store',[FlashcardsController::class,'store'])->name('flashcards.store');
});