<?php
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\User2Controller;



Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
// routes/api.php



Route::get('/test2', function () {
    return response()->json(['message' => 'API fonctionne']);
});

Route::get('/produit', [ApiProductController::class, 'get']);



Route::delete('/users/{id}', [UserController::class, 'destroy']);


//...........................................................................
//...........................................................................
//...........................................................................

Route::post('/users2', [User2Controller::class, 'addUser']);
Route::get('/users2', [User2Controller::class, 'showUser']);
Route::delete('/users2/{numero}', [User2Controller::class, 'deleteUser']);