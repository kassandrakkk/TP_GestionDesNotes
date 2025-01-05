<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des UE</title>
</head>
<body>

<h1>Liste des Unités d’Enseignement (UE)</h1>
<a href="{{ route('ues.create') }}">Ajouter une UE</a>
<table>
    <thead>
        <tr>
            <th>Code UE</th>
            <th>Nom</th>
            <th>ECTS</th>
            <th>Semestre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ues as $ue)
            <tr>
                <td>{{ $ue->code }}</td>
                <td>{{ $ue->nom }}</td>
                <td>{{ $ue->credits_ects }}</td>
                <td>S{{ $ue->semestre }}</td>
                <td>
                    <!-- Lien pour modifier -->
                    <a href="{{ route('ues.edit', $ue->id) }}" class="btn btn-primary">Modifier</a>
                    <!-- Formulaire pour supprimer -->
                    <form action="{{ route('ues.destroy', $ue->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 
    
</body>
</html>
