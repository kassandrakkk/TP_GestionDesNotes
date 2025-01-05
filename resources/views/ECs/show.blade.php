<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details EC</title>
</head>
<body>
<h1>Détails de l'EC</h1>
<p>Code : {{ $ec->code }}</p>
<p>Nom : {{ $ue->nom }}</p>
<p>Coefficient : {{ $ue->coefficient }}</p>
<p>un_id : {{ $ec->ue_id }}</p>
<a href="{{ route('ecs.index') }}">Retour à la liste</a>
    
</body>
</html>