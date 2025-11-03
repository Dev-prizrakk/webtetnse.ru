<?php
// Base
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Главная страница
Route::get('/', function () {
    return view('pages.home');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');