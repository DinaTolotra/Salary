<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;



Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
// routes/api.php



Route::get('/test2', function () {
    return response()->json(['message' => 'API fonctionne']);
});
