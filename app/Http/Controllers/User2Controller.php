<?php

namespace App\Http\Controllers;
use App\Models\User2;

use Illuminate\Http\Request;
use Nette\Schema\Message;
use PhpParser\Node\Stmt\TryCatch;

class User2Controller extends Controller
{
    public function addUser(Request $request)
    {
        try {

            $request->validate([
                'nom' => 'required',
                'numero' => 'required| unique:user2s',
                'nbjour' => 'required|',
                'taux' => 'required',
            ]);

            $newUser = User2::create([
                'nom' => $request->nom,
                'numero' => $request->numero,
                'nbjour' => $request->nbjour,
                'taux' => $request->taux,

            ]);
            return response()->json($newUser, 201);

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 406);
        }
    }


    public function showUser(){
        try {
            $users = User2::select('nom', 'numero', 'nbjour', 'taux')->get();
            return response()->json($users);

        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 406);
        }
    }

    public function deleteUser($numero) {

        try {

            $user = User2::findOrFail($numero);
            
            $user->delete();
            
            return response()->json(['message'=>'suppression reussi'])
            ->header('Access-control-Allow-Origins','*');
        } catch (\Throwable $th) {
            return response()->json(['message' => 'utilisateur non trouve'], 200);
        }
    }
}
