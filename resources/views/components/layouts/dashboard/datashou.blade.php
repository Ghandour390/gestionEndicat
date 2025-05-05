@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Bouton pour ouvrir le modal de création -->
    <button data-modal-target="createModal" data-modal-toggle="createModal" 
        class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 ease-in-out">
        Ajouter
    </button>

    <!-- Create Modal -->
    <div id="createModal" tabindex="-1" aria-hidden="true" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="text-center sm:mt-0 sm:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-indigo-800" id="modal-title">{{isset($title) ? $title : 'Créer nouveau'}}</h3>
                        <button type="button" data-modal-hide="createModal" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Fermer</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-5">
                        <form method="POST" action="#">
                            @csrf
                            <div class="grid grid-cols-1 gap-4">
                                @foreach ($thead as $field)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">{{ ucfirst($field) }}</label>
                                        <input type="text" name="{{ $field }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-5 sm:mt-6 flex justify-end space-x-2">
                                <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50" data-modal-hide="createModal">Annuler</button>
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-600 text-base font-medium text-white hover:bg-primary-700">Créer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" tabindex="-1" aria-hidden="true" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="text-center sm:mt-0 sm:text-left">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-indigo-800" id="modal-title">Modifier</h3>
                        <button type="button" data-modal-hide="editModal" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Fermer</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-5">
                        <form method="POST" action="#">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-4">
                                @foreach ($thead as $field)
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">{{ ucfirst($field) }}</label>
                                        <input type="text" name="{{ $field }}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-5 sm:mt-6 flex justify-end space-x-2">
                                <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50" data-modal-hide="editModal">Annuler</button>
                                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-600 text-base font-medium text-white hover:bg-primary-700">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gérer l'édition d'un élément
    window.editItem = function(id) {
        const form = document.getElementById('editForm');
        form.action = `${window.location.pathname}/${id}`;
        
        fetch(`${window.location.pathname}/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                const modal = document.getElementById('editModal');
                modal.classList.remove('hidden');
                
                document.querySelectorAll('[data-field]').forEach(input => {
                    const fieldName = input.getAttribute('data-field');
                    if (data[fieldName] !== undefined) {
                        if (input.tagName === 'SELECT') {
                            const value = data[fieldName]?.id || data[fieldName];
                            const option = Array.from(input.options).find(opt => opt.value == value);
                            if (option) {
                                option.selected = true;
                                input.dispatchEvent(new Event('change'));
                            }
                        } else {
                            input.value = data[fieldName];
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Erreur lors de la récupération des données');
            });
    };
});
</script>
