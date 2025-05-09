<?php
use Illuminate\Support\Facades\Route;

$index = function () {
    return view('index');
};

Route::get('/', $index);
Route::get('/connexion', $index);
Route::get('/ajout', $index);
Route::get('/list', $index);
Route::get('/bilan', $index);

