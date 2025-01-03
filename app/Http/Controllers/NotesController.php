<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\UE;
use App\Models\EC;  // Ajout de l'importation d'EC
use App\Models\Etudiant;

class NotesController extends Controller
{
    public function index()
    {
        // Récupération des notes avec les relations nécessaires
        $notes = Note::with(['etudiant', 'ec.ue'])->get();
        $ecs = EC::all();  // Récupération des ECs pour la page d'ajout de notes

        return view('notes', compact('notes', 'ecs'));  // Transmission des ECs à la vue
    }

    public function store(Request $request)
    {
        $request->validate([
            'ec_id' => 'required|exists:elements_constitutifs,id',  // Validation de l'ID de EC
            'note' => 'required|numeric|min:0|max:20',
            'session' => 'required|in:normale,rattrapage',
        ]);

        Note::create($request->all());

        return redirect()->route('notes.index')->with('success', 'Note ajoutée avec succès.');
    }
}
