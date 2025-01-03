<?php

namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        $ues = UE::all();
        return view('ues.index', compact('ues'));
    }

    public function create()
    {
        return view('ues.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:unites_enseignement,code|max:10',
            'nom' => 'required|string|max:255',
            'credits_ects' => 'required|integer|min:1|max:30',
            'semestre' => 'required|integer|min:1|max:6',
        ]);

        UE::create($request->all());
        return redirect()->route('ues.index')->with('success', 'UE créée avec succès.');
    }

    public function edit(UE $ue)
    {
        return view('ues.edit', compact('ue'));
    }

    public function update(Request $request, UE $ue)
    {
        $request->validate([
            'code' => 'required|max:10|unique:unites_enseignement,code,' . $ue->id,
            'nom' => 'required|string|max:255',
            'credits_ects' => 'required|integer|min:1|max:30',
            'semestre' => 'required|integer|min:1|max:6',
        ]);

        $ue->update($request->all());
        return redirect()->route('ues.index')->with('success', 'UE mise à jour avec succès.');
    }

    public function destroy(UE $ue)
    {
        $ue->delete();
        return redirect()->route('ues.index')->with('success', 'UE supprimée avec succès.');
    }
}
