@extends('layouts.compenant2')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date Examen</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Heure Début</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Heure Fin</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Durée</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Cours</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($examens as $examen)
                <tr class="hover:bg-gray-40">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $examen->date_examen }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $examen->heure_debut }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $examen->heure_fin }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $examen->duree }} minutes</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $examen->cours->titre ?? 'Non assigné' }}</td>
                    <td class="px-4 py-2">
                        <!-- Bouton Éditer -->
                        <button data-modal-target="edit-modal-{{ $examen->id }}" data-modal-toggle="edit-modal-{{ $examen->id }}"
                            class="text-blue-600 hover:text-blue-800 hover:underline">
                            ✏️
                        </button>

                        <!-- Modal de modification -->
                        <div id="edit-modal-{{ $examen->id}}" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen bg-black bg-opacity-50 flex justify-center items-center">
                            <div class="relative w-full max-w-2xl">
                                <div class="bg-white rounded-lg shadow dark:bg-gray-700">
                                    <form method="POST" action="{{ route('examens.update', $examen->id) }}"
                                        class="space-y-6 p-6">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <label class="block mb-1 font-semibold">Date Examen</label>
                                            <input type="date" name="date_examen" value="{{ old('date-examen', $examen->date_examen) }}"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                        </div>

                                        <div>
                                            <label class="block mb-1 font-semibold">Heure Début</label>
                                            <input type="time" name="heure_debut" value="{{ old('heure_debut', $examen->heure_debut) }}"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                        </div>

                                        <div>
                                            <label class="block mb-1 font-semibold">Heure Fin</label>
                                            <input type="time" name="heure_fin" value="{{ old('heure-fin', $examen->heure_fin) }}"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                        </div>

                                        <div>
                                            <label class="block mb-1 font-semibold">Durée (minutes)</label>
                                            <input type="number" name="duree" value="{{ old('duree', $examen->duree) }}"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                        </div>

                                        <div>
                                            <label class="block mb-1 font-semibold">status</label>
                                            <select name="status"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                                <option value="">Sélectionner un status</option>
                                                <option value="pinding"
                                                    {{ old('status', $examen->status) == 'pending' ? 'selected' : '' }}>    
                                              
                                                    Pending
                                                </option>
                                                <option value="encoure" {{ old('status', $examen->status) == 'encoure' ? 'selected' : '' }}>
                                                    Encours
                                                </option>
                                                <option value="annule" {{ old('status', $examen->status) == 'annule' ? 'selected' : '' }}>
                                                    Annulé  
                                                </option>
                                            </select>

                                        <div>
                                            <label class="block mb-1 font-semibold">Cours</label>
                                            <select name="cours_id"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                                <option value="">Sélectionner un cours</option>
                                                @foreach($cours as $cours_item)
                                                    <option value="{{ $cours_item->id }}"
                                                        {{ old('cours_id', $examen->cours_id) == $cours_item->id ? 'selected' : '' }}>
                                                        {{ $cours_item->titre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                                            <button type="submit"
                                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow">
                                                Mettre à jour
                                            </button>
                                            <button type="button" data-modal-hide="edit-modal-{{ $examen->id }}"
                                                class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded-md border border-gray-300">
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Bouton Supprimer -->
                        <form action="{{ route('examens.destroy', $examen->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">🗑️</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- @if(isset($examens->links()))
    <div class="mt-4">
        {{ $examens->links() }}
    </div>
    @endif --}}
</div>
@endsection