<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard');
});
Route::get('/home', function () {
    return Inertia::render('Home', [
        'message' => 'Hello from Laravel!'
    ]);
});
Route::get('/category', function () {
    return Inertia::render('Category');
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
});
Route::get('/detailpage', function () {
    return Inertia::render('Detailpage');
});
Route::get('/test', function () {
    return Inertia::render('Test');
});
Route::get('/detailtable', function () {
    return Inertia::render('DetailTable');
});
Route::get('/rules', function () {
    return Inertia::render('Rules');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});