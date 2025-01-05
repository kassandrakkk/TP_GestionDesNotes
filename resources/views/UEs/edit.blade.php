<!DOCTYPE html>
<html>
<head>
    <title>Modifier une UE</title>
</head>
<body>
    <h1>Modifier une Unité d’Enseignement (UE)</h1>
    <form action="{{ route('ues.update', $ue->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom de l'UE :</label><br>
        <input type="text" id="nom" name="nom" value="{{ $ue->nom }}" required><br><br>

        <label for="code">code:</label><br>
        <textarea id="code" name="code" required>{{ $ue->description }}</textarea><br><br>

        <label for="ects">Crédits ECTS :</label><br>
        <input type="number" id="ects" name="ects" value="{{ $ue->ects }}" min="0" step="1" required><br><br>
        <form action="{{ route('ues.associateEcs', $ue->id) }}" method="POST">
    @csrf
    <label for="ecs">Sélectionnez les ECs :</label><br>
    @foreach ($ecs as $ec)
        <input type="checkbox" name="ecs[]" value="{{ $ec->id }}"
            {{ $ue->ecs->contains($ec->id) ? 'checked' : '' }}> {{ $ec->nom }}<br>
    @endforeach
    <button type="submit">Associer</button>
</form>
        <label for="semestre">Semestre :</label><br>
        <select id="semestre" name="semestre" required>
            <option value="1" {{ $ue->semestre == 1 ? 'selected' : '' }}>Semestre 1</option>
            <option value="2" {{ $ue->semestre == 2 ? 'selected' : '' }}>Semestre 2</option>
            <option value="3" {{ $ue->semestre == 3 ? 'selected' : '' }}>Semestre 3</option>
            <option value="4" {{ $ue->semestre == 4 ? 'selected' : '' }}>Semestre 4</option>
            <option value="5" {{ $ue->semestre == 5 ? 'selected' : '' }}>Semestre 5</option>
            <option value="6" {{ $ue->semestre == 6 ? 'selected' : '' }}>Semestre 6</option>
        </select><br><br>

        <button type="submit">Mettre à jour</button>
    </form>
    <br>
    <a href="{{ route('ues.index') }}">Retour à la liste des UE</a>
</body>
</html>
