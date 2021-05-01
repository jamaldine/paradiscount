<?php

use Illuminate\Support\Facades\Route;

Route::name('home')->get('/', function () {
    return view('pages/home');
});

Route::get('/details', function(){
    return view('pages/details');
})->name('details');