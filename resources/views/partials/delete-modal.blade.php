<div x-data="{ show: false }" 
     x-show="show" 
     class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
     style="display: none;">
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h3 class="text-xl font-semibold mb-4">Confirmation</h3>
        <p class="mb-6">Êtes-vous sûr de vouloir supprimer cet élément ?</p>
        
        <form method="POST" id="deleteForm">
            @csrf
            @method('DELETE')
            
            <div class="flex justify-end space-x-3">
                <button type="button" 
                        @click="show = false"
                        class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                    Annuler
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Supprimer
                </button>
            </div>
        </form>
    </div>
</div>