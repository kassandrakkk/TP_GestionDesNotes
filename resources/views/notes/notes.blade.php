@extends('layout')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Ajouter une Note</h2>
    <form action="{{ route('notes.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="ec_id" class="block">Élément Constitutif</label>
            <select name="ec_id" id="ec_id" class="border rounded p-2 w-full">
                @foreach($ecs as $ec)
                    <option value="{{ $ec->id }}">{{ $ec->code }} - {{ $ec->nom }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="note" class="block">Note</label>
            <input type="number" name="note" id="note" min="0" max="20" step="0.25" class="border rounded p-2 w-full">
        </div>
        <div>
            <label for="session" class="block">Session</label>
            <select name="session" id="session" class="border rounded p-2 w-full">
                <option value="normale">Session Normale</option>
                <option value="rattrapage">Rattrapage</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
