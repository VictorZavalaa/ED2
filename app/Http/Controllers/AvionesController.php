<?php

namespace App\Http\Controllers;

use App\Models\Avion;

use Illuminate\Http\Request;

class AvionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aviones = Avion::all();
        return view('aviones.index', compact('aviones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aviones.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Avion::create([
            'modelo' => $request->modelo,
            'fabricante' => $request->fabricante,
            'capacidadPasa' => $request->capacidadPasa,
            'capacidadCarg' => $request->capacidadCarg,
            'anioFabr' => $request->anioFabr
        ]);
        return redirect()->route('aviones.create');
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
    public function edit(Avion $aviones)
    {
        return view('aviones.edit', compact('aviones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avion $aviones)
    {
        //validaciones
        $request->validate([
            'modelo' => 'required',
            'fabricante' => 'required',
            'capacidadPasa' => 'required|integer',
            'capacidadCarg' => 'required|integer',
            'anioFabr' => 'required|integer'
        ]);

        $aviones->update($request->all());
        return redirect()->route('aviones.index')
            ->with('success', 'Avion actualizado correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avion $aviones)
    {
        $aviones->delete();

        return redirect()->route('aviones.index')
            ->with('success', 'Avion eliminado correctamente');
    }
}
