<?php
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::POST("/", function (Request $request) {
    return response('Received', 200)
        ->header('Access-Control-Allow-Origins', '*');
});
