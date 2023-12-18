<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boxie;

class BoxieController extends Controller
{
    public function Index()
    {
        $boxies = Boxie::all();
        return response()->json($boxies);
    }

    public function Show($id)
    {

    }

    public function Store(Request $request)
    {
        $boxie = new Boxie;
        $boxie->name = $request->name;
        $boxie->type = $request->type;

        return response()->json([
            "message" => "boxie Added."
        ], 201);
    }

    public function Update(Request $request, $id)
    {
        if(Boxie::where('id', $id)->exists())
        {
            $boxie = Boxie::find($id);
            $boxie->name = is_null($request->name) ? $boxie->name : $request->name;
            $boxie->type = is_null($request->type) ? $boxie->type : $request->type;

            $boxie->save();
            return response()->json([
                "message" => "boxie Updated."
            ], 404);
        }
        else
        {
            return response()->json([
                "message" => "boxie Not Found."
            ], 404);
        }
    }
}
