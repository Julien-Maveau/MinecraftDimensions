<?php

namespace App\Http\Controllers;
use App\Models\Dimension;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    public function index(Request $request)
    {
        $query = Dimension::query();

        $dimension = $query->get();

        return view("index", compact("dimension"));
    }
    public function show($id)
    {
        $dimension = Dimension::findOrFail( $id );
        return view("show" , ["Dimension" => $dimension ]);
    }
}