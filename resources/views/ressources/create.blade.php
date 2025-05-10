<!-- Bouton pour ouvrir le modal -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal"
    class="mb-4 px-4 py-2 text-white bg-blue-800 rounded hover:bg-blue-900 transition">
    ➕ Créer une ressource
</button>

<!-- Modal principal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-black bg-opacity-50">
    
    <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl p-6">
        <!-- En-tête -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-700">Ajouter une ressource</h2>
            <button data-modal-hide="default-modal" class="text-gray-500 hover:text-red-500 text-xl">×</button>
        </div>

        <!-- Formulaire -->
        <form method="POST" action="{{ route('ressources.store') }}" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium text-sm mb-1">Titre</label>
                <input type="text" name="titre" class="w-full border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block font-medium text-sm mb-1">Description</label>
                <input type="text" name="description" class="w-full border-gray-300 rounded px-3 py-2 focus:ring focus:ring-blue-200">
            </div>

            <div>
                <label class="block font-medium text-sm mb-1">Cours</label>
                <select name="role_id" class="w-full border-gray-300 rounded px-3 py-2">
                    @foreach($cours as $cour)
                        <option value="{{ $cour->id }}">{{ $cour->titre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                    Enregistrer
                </button>
                <button type="button" data-modal-hide="default-modal"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded">
                    Annuler
                </button>
            </div>
        </form>
    </div>
</div>
