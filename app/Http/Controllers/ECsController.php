<?php

namespace App\Http\Controllers;

use App\Models\ECs;
use App\Models\UEs;
use Illuminate\Http\Request;

class ECsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecs = ECs::with('ue')->get();
        return view('ecs.index', compact('ecs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ues = UEs::all();
        return view('ecs.create', compact('ues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:elements_constitutifs|max:10',
            'nom' => 'required|string|max:255',
            'coefficient' => 'required|integer|between:1,5',
            'ue_id' => 'required|exists:unites_enseignement,id',
        ]);

        ECs::create($validated);

        return redirect()->route('ecs.index')->with('success', 'EC créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ecs.show', compact('ec'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ues = UEs::all();
        return view('ecs.edit', compact('ec', 'ues'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ECs $ec)
    {
        $validated = $request->validate([
            'code' => 'required|max:10|unique:elements_constitutifs,code,' . $ec->id,
            'nom' => 'required|string|max:255',
            'coefficient' => 'required|integer|between:1,5',
            'ue_id' => 'required|exists:unites_enseignement,id',
        ]);

        $ec->update($validated);

        return redirect()->route('ecs.index')->with('success', 'EC mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ECs $id)
    {
        $id->delete();
        return redirect()->route('ecs.index')->with('success', 'EC supprimé.');
    }
}
