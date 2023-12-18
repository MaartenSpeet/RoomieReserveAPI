<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function Index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    public function Show($id)
    {
        $item = Item::where('boxie_id', $id);
        if(!empty($item))
        {
            return response()->json($item);
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

    }

    public function Update(Request $request, $id)
    {

    }
}
