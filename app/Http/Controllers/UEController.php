<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UE;
use Illuminate\View\View;

class UEController extends Controller
{
    public function index()
{
    $ues = UE::all();
    return view('ues.index', compact('ues'));

}

public function show($id)
{
    $ue = UE::findOrFail($id);
    return view('ues.show', compact('ue'));
}

public function create()
{
    return view('ues.create');
}
public function store(Request $request)
{
    $request->validate([
        'code' => 'required|string|max:10',
        'nom' => 'required|string|max:255',
        'credits_ects' => 'required|integer|min:1',
        'semestre' => 'required|integer|between:1,6',
    ]);

    UE::create($request->all());
    return redirect()->route('ues.index')->with('success', 'UE créée avec succès');
}
public function edit($id)
{
    $ue = UE::findOrFail($id);
    return view('ues.edit', compact('ue'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'code' => 'required|string|max:10',
        'nom' => 'required|string|max:255',
        'credits_ects' => 'required|integer|min:1',
        'semestre' => 'required|integer|between:1,6',
    ]);

    $ue = UE::findOrFail($id);
    $ue->update($request->all());

    return redirect()->route('ues.index')->with('success', 'UE mise à jour avec succès');
}

public function associateEcs(Request $request, $ueId)
{
    $ue = UE::findOrFail($ueId);

    // Associer les ECs sélectionnés à l'UE
    $ue->ecs()->sync($request->input('ecs', [])); 

    return redirect()->route('ues.edit', $ueId)->with('success', 'Les ECs ont été associés avec succès.');
}



}

