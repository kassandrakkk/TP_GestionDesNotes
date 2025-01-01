<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle note</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Ajouter une nouvelle note</h1>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <strong>Erreur !</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('notes.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="etudiant_id" class="block text-sm font-medium text-gray-700">Étudiant</label>
                <input type="text" name="etudiant_id" id="etudiant_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="ec_id" class="block text-sm font-medium text-gray-700">Élément Constitutif</label>
                <input type="text" name="ec_id" id="ec_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                <input type="number" name="note" id="note" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" step="0.01" min="0" max="20" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Enregistrer
            </button>
        </form>
    </div>
</body>
</html>
