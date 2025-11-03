<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Здесь можно сделать Mail::to() или сохранить в базу
        return back()->with('success', 'Спасибо! Мы свяжемся с вами.');
    }
}
