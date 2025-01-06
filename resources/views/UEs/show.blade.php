<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Détails de l'UE</h1>
<p>Code : {{ $ue->code }}</p>
<p>Nom : {{ $ue->nom }}</p>
<p>Crédits ECTS : {{ $ue->credits_ects }}</p>
<p>Semestre : {{ $ue->semestre }}</p>
<a href="{{ route('ues.index') }}">Retour à la liste</a>
    
</body>
</html>