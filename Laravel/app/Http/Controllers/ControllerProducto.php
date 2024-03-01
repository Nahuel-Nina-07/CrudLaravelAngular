<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Support\Facades\Validator;

class ControllerProducto extends Controller
{
    public function index()
    {
        $products = Producto::all();
        return response()->json($products, 200);
    }

    public function create()
    {
        
    }

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

    public function destroy(string $id)
    {
        $post = Producto::find($id);
        if(!$post){
            return response()->json(['mensaje' => 'No se encontro el artista'], 404);}
        $post->delete();
        return response()->json(Producto::all());
    }
}
