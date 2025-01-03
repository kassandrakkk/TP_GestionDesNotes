<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UE;

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
public function destroy($id)
{
    $ue = UE::findOrFail($id);
    $ue->delete();

    return redirect()->route('ues.index')->with('success', 'UE supprimée avec succès');
}





}

