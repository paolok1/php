<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Chi-Siamo', function () {
    return view('chiSiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});