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
            return response()->json($th->getMessage(), 400);
        }
    }

    public function destroy($id)
    {
        try {
    $user = User::findOrFail($id);

    // Supprimer l'utilisateur
    $user->delete();

    // Retourner une réponse
    return response()->json(['message' => 'User deleted successfully']);

} catch (\Throwable $th) {
    \Log::error('Erreur lors de la suppression de l\'utilisateur : ' . $th->getMessage());
        return response()->json(['error' => 'Erreur lors de la suppression'], 500);
}
    }
}
