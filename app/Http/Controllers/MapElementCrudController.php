<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapElementCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Guarda un nuevo elemento en la base de datos.
     */
    public function save(Request $request)
    {
        try {
            // Crear una nueva instancia de MapElement
            $mapElement = new MapElement();
            $mapElement->tipo = $request->input('tipo');
            $mapElement->datos = json_encode($request->input('datos')); // Guardar como JSON
            $mapElement->save();

            // Retornar una respuesta exitosa
            return response()->json([
                'success' => true,
                'id' => $mapElement->id,
            ], 200);
        } catch (\Exception $e) {
            // Manejar errores
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Carga todos los elementos desde la base de datos.
     */
    public function load()
    {
        try {
            // Obtener todos los elementos
            $elements = MapElement::all();

            // Retornar los datos en formato JSON
            return response()->json($elements, 200);
        } catch (\Exception $e) {
            // Manejar errores
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
