<?php
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\ApiProductController;

Route::POST("/", function (Request $request) {
    return response('Received', 200)
        ->header('Access-Control-Allow-Origins', '*');
});

Route::get('/produit', [ApiProductController::class, 'get']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::post('/users2', [User2Controller::class, 'addUser']);
Route::get('/users2', [User2Controller::class, 'showUser']);
Route::delete('/users2/{numero}', [User2Controller::class, 'deleteUser']);
