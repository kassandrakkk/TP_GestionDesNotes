@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Résultats par semestre</h2>
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Code UE</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Moyenne</th>
                <th class="border px-4 py-2">Validation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($semestres as $semestre => $ues)
                @foreach($ues as $ue)
                    <tr>
                        <td class="border px-4 py-2">{{ $ue->code }}</td>
                        <td class="border px-4 py-2">{{ $ue->nom }}</td>
                        <td class="border px-4 py-2">{{ $ue->moyenne }}</td>
                        <td class="border px-4 py-2">{{ $ue->moyenne >= 10 ? 'Oui' : 'Non' }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
@endsection
