@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-6">Sélectionner une ressource</h2>
        
        <div class="mb-4">
            <label for="ressource" class="block text-sm font-medium text-gray-700">Ressource</label>
            <select id="ressource" name="ressource" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="">Sélectionnez une ressource</option>
                @foreach($ressources as $ressource)
                    <option value="{{ $ressource->id }}">{{ $ressource->titre }}</option>
                @endforeach
            </select>
        </div>

        <div id="ressourceDetails" class="mt-6 hidden">
            <h3 class="text-lg font-semibold mb-4">Détails de la ressource</h3>
            <div class="bg-gray-50 p-4 rounded-md">
                <p class="mb-2"><span class="font-medium">Titre:</span> <span id="titre"></span></p>
                <p class="mb-2"><span class="font-medium">Description:</span> <span id="description"></span></p>
                <p><span class="font-medium">Cours associé:</span> <span id="cours"></span></p>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('ressource').addEventListener('change', function() {
    const detailsDiv = document.getElementById('ressourceDetails');
    const selectedValue = this.value;
    
    if (selectedValue) {
        fetch(`/ressources/${selectedValue}/details`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('titre').textContent = data.titre;
                document.getElementById('description').textContent = data.description || 'Aucune description';
                document.getElementById('cours').textContent = data.cours ? data.cours.titre : 'Aucun cours associé';
                detailsDiv.classList.remove('hidden');
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la récupération des détails');
            });
    } else {
        detailsDiv.classList.add('hidden');
    }
});
</script>
@endsection