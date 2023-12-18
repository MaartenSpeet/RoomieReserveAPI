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

    }

    public function Store(Request $request)
    {

    }

    public function Update(Request $request, $id)
    {

    }
}
