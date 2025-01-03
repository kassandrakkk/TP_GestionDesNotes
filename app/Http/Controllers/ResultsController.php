<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UE;

class ResultsController extends Controller
{
    public function index()
    {
        // Récupération des UEs avec leurs moyennes par semestre
        $semestres = UE::with(['ecs.notes'])
            ->get()
            ->groupBy('semestre')
            ->map(function ($ues) {
                return $ues->map(function ($ue) {
                    $ue->moyenne = $ue->ecs->reduce(function ($carry, $ec) {
                        return $carry + $ec->notes->avg('note') * $ec->coefficient;
                    }, 0) / $ue->ecs->sum('coefficient');

                    return $ue;
                });
            });

        return view('results', compact('semestres'));
    }
}
