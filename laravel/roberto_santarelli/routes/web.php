<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/opere', function (){
    return view('opere');
});

Route::get('/biografia', function (){
    return view('biografia');
});
