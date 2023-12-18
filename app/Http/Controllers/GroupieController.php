<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupie;
use App\Models\User;

class GroupieController extends Controller
{
    public function Index()
    {
        $groupies = Groupie::all();
        return response()->json($groupies);
    }

    public function Show($id)
    {
        $groups = array();
        $users = User::find($id);
        foreach ($users->groupies as $groupie) {
            array_push($groups, $groupie);
        }
        return response()->json($groups);
    }

    public function Store(Request $request)
    {
        $groupie = new Groupie;
        $groupie->name = $request->name;

        return response()->json([
            "message" => "Groupie Added."
        ], 201);
    }

    public function Update(Request $request, $id)
    {
        if(Groupie::where('id', $id)->exists())
        {
            $groupie = Groupie::find($id);
            $groupie->name = is_null($request->name) ? $groupie->name : $request->name;

            $groupie->save();
            return response()->json([
                "message" => "Groupie Updated."
            ], 404);
        }
        else
        {
            return response()->json([
                "message" => "Groupie Not Found."
            ], 404);
        }
    }
}
