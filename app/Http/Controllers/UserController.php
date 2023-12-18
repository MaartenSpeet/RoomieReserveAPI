<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // User
    public function Index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function Show($id)
    {
        $user = User::find($id);
        if(!empty($user))
        {
            return response()->json($user);
        }
        else
        {
            return response()->json([
                "message" => "User not found."
            ], 404);
        }
    }

    public function Store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;

        return response()->json([
            "message" => "User Added."
        ], 201);
    }

    public function Update(Request $request, $id)
    {
        if(User::where('id', $id)->exists())
        {
            $user = User::find($id);
            $user->name = is_null($request->name) ? $user->name : $request->name;
            $user->email = is_null($request->email) ? $user->email : $request->email;

            $user->save();
            return response()->json([
                "message" => "User Updated."
            ], 404);
        }
        else
        {
            return response()->json([
                "message" => "User Not Found."
            ], 404);
        }
    }
}
