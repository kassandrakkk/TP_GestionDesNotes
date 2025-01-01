<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'etudiant_id' => 'required|integer',
            'ec_id' => 'required|integer',
            'note' => 'required|numeric|min:0|max:20',
        ]);

        Note::create([
            'etudiant_id' => $request->etudiant_id,
            'ec_id' => $request->ec_id,
            'note' => $request->note,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note ajoutée avec succès');
    }

}
