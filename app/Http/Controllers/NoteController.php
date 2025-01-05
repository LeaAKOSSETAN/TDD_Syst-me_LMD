<?php
namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Etudiant;
use App\Models\ECs;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::with(['etudiant', 'elementConstitutif'])->get();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        $etudiants = Etudiant::all();
        $elements = ECs::all();
        return view('notes.create', compact('etudiants', 'elements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'etudiant_id' => 'required|exists:etudiants,id',
            'ec_id' => 'required|exists:elements_constitutifs,id',
            'note' => 'required|numeric|between:0,20',
            'session' => 'required|in:normale,rattrapage',
            'date_evaluation' => 'required|date',
        ]);

        Note::create($request->all());

        return redirect()->route('notes.index')->with('success', 'Note ajoutée avec succès.');
    }

    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        $etudiants = Etudiant::all();
        $elements = Ecs::all();
        return view('notes.edit', compact('note', 'etudiants', 'elements'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'etudiant_id' => 'required|exists:etudiants,id',
            'ec_id' => 'required|exists:elements_constitutifs,id',
            'note' => 'required|numeric|between:0,20',
            'session' => 'required|in:normale,rattrapage',
            'date_evaluation' => 'required|date',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('success', 'Note mise à jour avec succès.');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note supprimée avec succès.');
    }
}
