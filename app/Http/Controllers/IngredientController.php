<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Http\Requests\IngredientRequest;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::orderBy('id', 'asc')->get();
        return view('ingredientes.index', compact('ingredients'));
    }

    public function create()
    {
        return view('ingredientes.agregar');
    }

    public function store(IngredientRequest $request)
    {
        $data = $request->validated();
        $ingredient = Ingredient::create( $data );
        return redirect()->route('ingredient.index');
    }

    public function show(Ingredient $ingredient)
    {
        //
    }

    public function edit(Ingredient $ingredient)
    {
        return view('ingredientes.editar', compact('ingredient'));
    }

    public function update(IngredientRequest $request, Ingredient $ingredient)
    {
        $data = $request->validated();
        $ingredient->update($data);
        return redirect()->route('ingredient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return redirect()->route('ingredient.index');
    }
}
