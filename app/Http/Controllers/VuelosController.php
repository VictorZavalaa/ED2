<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use 

class VuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vuelos = Vuelo::all();
        return view('vuelos.index', compact('vuelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vuelo::create([
            'horaSalidaTerminal' => $request->horaSalidaTerminal,
            'horaEstimadaLlegada' => $request->horaEstimadaLlegada,
            'terSalida' => $request->terSalida,
            'terLlegada' => $request->terLlegada,
            'ciudadSalida' => $request->ciudadSalida,
            'ciudadLlegada' => $request->ciudadLlegada,
            'nomPiloto' => $request->nomPiloto,
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
