<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EC;
use Illuminate\View\View;

class ECController extends Controller
{
    public function index()
    {
        $ecs = EC::all();
        return view('ecs.index', compact('ecs'));
    
    }
    public function show($id)
{
    $ue = EC::findOrFail($id);
    return view('ecs.show', compact('ec'));
}

public function create()
{
    return view('ecs.create');
}
public function store(Request $request)
{
    $request->validate([
        'code' => 'required|string|max:10',
        'nom' => 'required|string|max:255',
        'coefficient' => 'required|integer|min:1',
        'ue_id' => 'required|integer',
    ]);
    EC::create($request->all());
    return redirect()->route('ECs.index')->with('success', 'EC créée avec succès');
}
public function edit($id)
{
    $ue = EC::findOrFail($id);
    return view('ecs.edit', compact('ec'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'code' => 'required|string|max:10',
        'nom' => 'required|string|max:255',
        'coefficient' => 'required|integer|min:1',
        'ue_id' => 'required|integer',
    ]);

    $ue = EC::findOrFail($id);
    $ue->update($request->all());

    return redirect()->route('ecs.index')->with('success', 'EC mise à jour avec succès');
}





}


