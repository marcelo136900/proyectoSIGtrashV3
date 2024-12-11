<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapElement;

class MapElementController extends Controller
{
    public function index()
    {
        $elements = MapElement::all();
        return response()->json($elements);
    }
}
