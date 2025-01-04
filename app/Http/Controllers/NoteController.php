<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NoteController extends Controller
{
    // Méthode pour afficher le formulaire de saisie de notes
    public function create()
    {
        return view('notes.create'); // Assure-toi que le fichier blade est bien dans resources/views/notes/create.blade.php
    }

    // Méthode pour traiter la soumission du formulaire
    public function store(Request $request)
    {
        // Validation des données envoyées
        $validatedData = $request->validate([
            'ec_id' => 'required|integer',
            'note' => 'required|numeric|min:0|max:20',
            'session' => 'required|string',
        ]);

        // Traitement des données (par exemple, enregistrement dans la base de données)
        // Note::create($validatedData); // Décommente si tu veux enregistrer les données en base

        // Rediriger ou afficher un message de succès
        return redirect()->route('notes.create')->with('success', 'Note enregistrée avec succès!');
    }
}
