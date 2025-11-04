<?php
// Base
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Главная страница
Route::get('/', function () {
    return view('pages.home');
});
// Главная страница
Route::get('/old', function () {
    return view('pages.old');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');