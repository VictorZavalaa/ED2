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
}
