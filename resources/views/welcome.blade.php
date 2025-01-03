<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Notes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Bienvenue dans l'application de gestion des notes</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('ues.index') }}" class="p-4 bg-blue-500 text-white rounded shadow hover:bg-blue-600">
                Gérer les UEs
            </a>
            <a href="{{ route('notes.index') }}" class="p-4 bg-green-500 text-white rounded shadow hover:bg-green-600">
                Gérer les Notes
            </a>
        </div>
    </div>
</body>
</html>
