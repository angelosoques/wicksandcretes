<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['ip.restriction'])->group(function () {
    Route::get('/admin/login', function () {
        return view('admin/login');
    });
});

Route::get('/login', function () {
    return view('shop/login');
}); 