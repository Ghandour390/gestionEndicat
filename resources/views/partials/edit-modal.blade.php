<div x-data="{ show: false }" 
     x-show="show" 
     class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
     style="display: none;">
    <div class="bg-white rounded-lg p-6 w-full max-w-2xl">
        <h3 class="text-xl font-semibold mb-4">Modifier l'élément</h3>
        
        <form method="POST" id="editForm">
            @csrf
            @method('PUT')
            
            <!-- Champs dynamiques générés via JavaScript -->
            <div id="modalContent"></div>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" 
                        @click="show = false"
                        class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                    Annuler
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>