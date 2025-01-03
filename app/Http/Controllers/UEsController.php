<?php

namespace App\Http\Controllers;

use App\Models\UEs;
use Illuminate\Http\Request;

class UEsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ues = UEs::all();
        return view('ues.index', compact('ues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:unites_enseignement|max:10',
            'nom' => 'required|string|max:255',
            'credits_ects' => 'required|integer|between:1,30',
            'semestre' => 'required|integer|between:1,6',
        ]);

        UEs::create($validated);

        return redirect()->route('ues.index')->with('success', 'UE créée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UEs $id)
    {
        return view('ues.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UEs $id)
    {
        return view('ues.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UEs $ues)
    {
        $validated = $request->validate([
            'code' => 'required|max:10|unique:unites_enseignement,code,' . $ues->id,
            'nom' => 'required|string|max:255',
            'credits_ects' => 'required|integer|between:1,30',
            'semestre' => 'required|integer|between:1,6',
        ]);

        $ues->update($validated);

        return redirect()->route('ues.index')->with('success', 'UE mise à jour avec succès.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UEs $id)
    {

        $id->delete();
        return redirect()->route('ues.index')->with('success', 'UE supprimée avec succès.');    }
}
