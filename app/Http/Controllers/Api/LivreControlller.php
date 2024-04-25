<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LIVRE;
use Illuminate\Http\Request;

class LivreControlller extends Controller
{
    //

    public function index()


    {
        $livre = LIVRE::all();


        return response()->json([
            "data" => $livre
        ]);
    }

    public function add(Request $request)
    {

        $livre  =  new LIVRE();
        $livre->type = $request->type;
        $livre->save();

        return response()->json([
            "data" => $livre
        ]);
    }
}
