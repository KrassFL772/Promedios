<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materias_Ctrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materias_Ctrl::all(); 

        return view('Materias.index', compact('materias')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Materias.crear'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'Nombre' => 'required|max:50',
          ]); 
          Materias_Ctrl::create($validatedData); 
        
          return redirect('/Materias')->with('success', 'La materia ha sido registrada exitosamente.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $Materias_ID)
    {
        $materia = Materias_Ctrl::findOrFail($Materias_ID); 

        return view('Materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $Materias_ID)
    {
        $materia = Materias_Ctrl::findOrFail($Materias_ID); 

        return view('Materias.editar', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Materias_ID)
    {
        
        $validatedData = $request->validate([ 
            'Nombre' => 'required|max:50',
          ]); 
          Materias_Ctrl::create($validatedData); 
        
          return redirect('/Materias')->with('success', 'La materia ha sido actualizada exitosamente.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Materias_ID)
    {
        $materia = Materias_Ctrl::findOrFail($Materias_ID); 
        $materia->delete(); 

        return redirect('/Materias')->with('success', 'La materia ha sido eliminada de manera exitosa.');
    }
}
