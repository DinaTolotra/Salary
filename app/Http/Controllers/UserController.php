<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        try {
            
            
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
            ]);
            
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name
            ]);
            return response()->json($user, 201);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 406);
        }
    }
}
