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

    }

    public function Update(Request $request, $id)
    {

    }
}
