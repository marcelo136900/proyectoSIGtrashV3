<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\ElementoMapa;

class MapController extends Controller
{
    // Guardar datos en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|string',
            'datos' => 'required|json',
        ]);

        $elemento = new ElementoMapa();
        $elemento->tipo = $validatedData['tipo'];
        $elemento->datos = $validatedData['datos'];
        $elemento->creado_por = Auth::id(); // Usuario actual
        $elemento->save();

        return response()->json(['success' => true, 'message' => 'Elemento guardado correctamente']);
    }

    // Cargar datos desde la base de datos
    public function load()
    {
        $elementos = ElementoMapa::all();
        return response()->json($elementos);
    }
}
