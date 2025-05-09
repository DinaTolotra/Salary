<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::post("/", function ($Request) {
    return response()->json(['message' => 'API fonctionne'], 200);
});
