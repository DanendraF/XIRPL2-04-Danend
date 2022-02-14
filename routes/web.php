<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function(){
    return view ('home', [
        "title" => "Home"]);
});

Route::get('/about', function(){
    return view ('about',[
        "title" => "about",
        "nama" => "Danendra Farrel Adriansyah",
        "email" => "Adriansyahdanendra@gmail.com",
        "gambar" => "superleggera.jpg"
    ]);
});

Route::get('/gallery', function(){
    return view ('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);