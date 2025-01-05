TYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les éléments constitutifs </title>
</head>
<body>

<h1>les éléments constitutifs (EC)</h1>
<a href="{{ route('ecs.create') }}">Ajouter une UE</a>
<table>
    <thead>
        <tr>
            <th>Code EC</th>
            <th>Nom</th>
            <th>Coefficient</th>
            <th>ue_id</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ues as $ue)
            <tr>
                <td>{{ $ec->code }}</td>
                <td>{{ $ec->nom }}</td>
                <td>{{ $ec->coefficient}}</td>
                <td>S{{ $ec->ue_id }}</td>
                <td>
                    <!-- Lien pour modifier -->
                    <a href="{{ route('ecs.edit', $ec->id) }}" class="btn btn-primary">Modifier</a>
                    <!-- Formulaire pour supprimer -->
                    <form action="{{ route('ecs.destroy', $ec->id) }}" method="POST" style="display:inline;">
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