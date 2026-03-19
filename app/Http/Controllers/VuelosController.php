<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;

use Illuminate\Http\Request;

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
        return view('vuelos.edit', compact('vuelos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'horaSalidaTerminal' => 'request',
            'horaEstimadaLlegada' => 'request',
            'terSalida' => 'request',
            'terLlegada' => 'request',
            'ciudadSalida' => 'request',
            'ciudadLlegada' => 'request',
            'nomPiloto' => 'request'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vuelos->delete();

        return redirect()->route('vuelos.index')
            ->with('success', 'Vuelo eliminado correctamente');
    }
}
