<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des notes</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Liste des notes</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Étudiant</th>
                    <th class="border border-gray-300 px-4 py-2">Élément Constitutif</th>
                    <th class="border border-gray-300 px-4 py-2">Note</th>
                    <th class="border border-gray-300 px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notes as $note)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $note->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $note->etudiant_id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $note->ec_id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $note->note }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $note->created_at->format('d/m/Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">Aucune note trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
