<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Http\Requests\CakeRequest;
use Illuminate\Http\Request;


class CakeController extends Controller
{
    
    public function index()
    {
        $cakes = Cake::orderBy('id', 'asc')->get();
        return view('pasteles.index', compact('cakes'));
    }

    public function create()
    {
        return view('pasteles.agregar');
    }

    public function store(CakeRequest $request)
    {
        $data = $request->validated();
        $pastel = Cake::create( $data );
        return redirect()->route('cake.index');
    }

    public function show(Cake $cake)
    {
        //
    }

    public function edit(Cake $cake)
    {
        return view('pasteles.editar', compact('cake'));
    }

    public function update(CakeRequest $request, Cake $cake)
    {
        $data = $request->validated();
        $cake->update($data);
        return redirect()->route('cake.index');
    }

    public function destroy(Cake $cake)
    {
        $cake->delete();
        return redirect()->route('cake.index');
    }
}
