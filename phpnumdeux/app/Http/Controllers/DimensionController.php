<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DimensionController extends Controller
{
    public function index(Request $request)
    {
        $query = Dimension::query();

        $dimension = $query->get();

        return view("index", compact("dimension"));
    }
    public function show(string $id)
    {
        $dimension = Dimension::find( $id );
        return view("show" , ["Dimension" => $dimension ]);
    }
}