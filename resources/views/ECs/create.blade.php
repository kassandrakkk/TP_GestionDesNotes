<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un EC</title>
</head>
<body>
<h1>Ajouter un élément constitutif (EC)</h1>
<p> Veuiller remplir les informations ci-dessous s'il vous plaît</p>
<form action="{{ route('ecs.store') }}" method="POST">
        @csrf
        <label for="nom">Nom de l'EC :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="code"> Le code l'EC :</label><br>
        <input type="text" id="code" name="code" required><br><br>

        <label for="coefficient">Coefficient :</label><br>
        <input type="number" id="coefficient" name="coefficient" min="0" step="1" required><br><br>

        <label for="ue_id">ue_id :</label><br>
        <input type="number" id="ue_id" name="ue_id" min="0" step="1" required><br><br>

        
         <button type="submit">Enregistrer</button>
    </form>
    <br>
    <a href="{{ route('ecs.index') }}">Retour à la liste des EC</a>

</body>
</html>
</body>
</html> 