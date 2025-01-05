<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une UE</title>
</head>
<body>
<h1>Ajouter une Unité d’Enseignement (UE)</h1>
<p> Veuiller remplir les informations ci-dessous s'il vous plaît</p>
<form action="{{ route('ues.store') }}" method="POST">
        @csrf
        <label for="nom">Nom de l'UE :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="code"> Le code l'UE :</label><br>
        <input type="text" id="code" name="code" required><br><br>

        <label for="ects">Crédits ECTS :</label><br>
        <input type="number" id="ects" name="ects" min="0" step="1" required><br><br>

        <label for="semestre">Semestre :</label><br>
        <select id="semestre" name="semestre" required>
            <option value="1">Semestre 1</option>
            <option value="2">Semestre 2</option>
            <option value="3">Semestre 3</option>
            <option value="4">Semestre 4</option>
            <option value="5">Semestre 5</option>
            <option value="6">Semestre 6</option>
        </select><br><br>
        

        <button type="submit">Enregistrer</button>
    </form>
    <br>
    <a href="{{ route('ues.index') }}">Retour à la liste des UE</a>
</body>
</html>
</body>
</html>