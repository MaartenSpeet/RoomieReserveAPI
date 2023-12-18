<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupie;

class GroupieController extends Controller
{
    public function Index()
    {
        $groupies = Groupie::all();
        return response()->json($groupies);
    }

    public function Show($id)
    {
        $groupie = Groupie::where('user_id', $id)->get();
        if(!empty($items))
        {
            return response()->json($items);
        }
        else
        {
            return response()->json([
                "message" => "groupie not found."
            ], 404);
        }
    }

    public function Store(Request $request)
    {
        $groupie = new Item;
        $groupie->name = $request->name;

        return response()->json([
            "message" => "Groupie Added."
        ], 201);
    }

    public function Update(Request $request, $id)
    {
        if(Item::where('id', $id)->exists())
        {
            $item = Item::find($id);
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
