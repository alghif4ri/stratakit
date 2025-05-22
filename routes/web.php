<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-helper', function () {
    return view('test');
})->name('test-helper');