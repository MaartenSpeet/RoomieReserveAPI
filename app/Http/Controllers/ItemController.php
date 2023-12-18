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
                "message" => "Item(s) not found."
            ], 404);
        }
    }

    public function Store(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->owner_id = $request->owner_id;
        $item->boxie_id = $request->boxie_id;
        $item->bestbefore = $request->bestbefore;

        return response()->json([
            "message" => "Item Added."
        ], 201);
    }

    public function Update(Request $request, $id)
    {
        if(Item::where('id', $id)->exists())
        {
            $item = Item::find($id);
            $item->name = is_null($request->name) ? $item->name : $request->name;
            $item->owner_id = is_null($request->owner_id) ? $user->owner_id : $request->owner_id;
            $item->boxie_id = is_null($request->boxie_id) ? $user->boxie_id : $request->boxie_id;
            $item->bestbefore = is_null($request->bestbefore) ? $user->bestbefore : $request->bestbefore;

            $user->save();
            return response()->json([
                "message" => "Item Updated."
            ], 404);
        }
        else
        {
            return response()->json([
                "message" => "Item Not Found."
            ], 404);
        }
    }
}
