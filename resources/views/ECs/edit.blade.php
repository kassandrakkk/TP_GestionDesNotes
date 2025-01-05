<!DOCTYPE html>
<html>
<head>
    <title>Modifier un EC</title>
</head>
<body>
    <h1>Modifier un EC </h1>
    <form action="{{ route('ecs.update', $ec->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom de l'EC :</label><br>
        <input type="text" id="nom" name="nom" value="{{ $ue->nom }}" required><br><br>

        <label for="code">code:</label><br>
        <textarea id="code" name="code" required>{{ $ue->description }}</textarea><br><br>

        <label for="coefficient">Coefficient :</label><br>
        <input type="number" id="coefficient" name="coefficient" value="{{ $ec->coefficient }}" min="1" step="1" required><br><br>

        <label for="ue_id">ue_id:</label><br>
        <input type="number" id="ue_id" name="ue_id" value="{{ $ec->un_id }}" min="1" step="1" required><br><br>
        

        <button type="submit">Mettre à jour</button>
    </form>
    <br>
    <a href="{{ route('ues.index') }}">Retour à la liste des EC</a>
</body>
</html>