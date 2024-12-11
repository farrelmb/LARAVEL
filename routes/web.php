<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/prjct', function () {
    return view('myproject');
});

Route::get('/cntc', function () {
    return view('contact');
});