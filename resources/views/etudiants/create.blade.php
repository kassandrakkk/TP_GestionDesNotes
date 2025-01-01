<!-- resources/views/etudiants/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
</head>
<body>
    <h1>Ajouter un Étudiant</h1>
    <form action="{{ route('etudiants.store') }}" method="POST">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
