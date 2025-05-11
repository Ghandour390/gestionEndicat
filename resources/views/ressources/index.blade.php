@extends('layouts.compenant2')
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 space-y-8">

    <button data-modal-target="default-modal" data-modal-toggle="default-modal"
    class="mb-4 px-4 py-2 text-white bg-blue-800 rounded hover:bg-blue-900 transition">
    ➕ Créer une ressource
</button>
    <!-- Bouton d'ajout -->
    @include('ressources.create')

    <!-- Tableau des ressources -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-gray-700 text-sm font-semibold uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">Titre</th>
                    <th class="px-6 py-3 text-left">Cours</th>
                    <th class="px-6 py-3 text-left">Description</th>
                    <th class="px-6 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach($ressources as $ressource)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-3">{{ $ressource->titre }}</td>
                        <td class="px-6 py-3">
                            <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                                {{ $ressource->cours->titre }}
                            </span>
                        </td>
                        <td class="px-6 py-3">{{ $ressource->description }}</td>
                        <td class="px-6 py-3 space-x-2">
                            <!-- Bouton Modifier -->
                            <button 
                                data-modal-target="edit-modal-{{ $ressource->id }}" 
                                data-modal-toggle="edit-modal-{{ $ressource->id }}"
                                class="text-blue-600 hover:text-blue-800 transition">
                                ✏️
                            </button>

                            <!-- Bouton Supprimer (à adapter avec confirmation) -->
                            <button class="text-red-600 hover:text-red-800 transition">
                                🗑️
                            </button>

                            <!-- Modal d'édition -->
                            <div id="edit-modal-{{ $ressource->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden fixed top-0 left-0 right-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
                                
                                <div class="bg-white rounded-lg w-full max-w-xl p-6 relative">
                                    <h2 class="text-lg font-semibold mb-4">Modifier Ressource</h2>

                                    <form method="POST" action="{{ route('ressources.update', $ressource->id) }}" enctype="multipart/form-data" class="space-y-4">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <label class="block font-medium mb-1">Titre</label>
                                            <input type="text" name="titre" value="{{ $ressource->titre }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label class="block font-medium mb-1">Description</label>
                                            <input type="text" name="description" value="{{ $ressource->description }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-500">
                                        </div>

                                        <div>
                                            <label class="block font-medium mb-1">Cours</label>
                                            <select name="role_id" class="w-full border border-gray-300 rounded px-3 py-2">
                                                @foreach($cours as $cour)
                                                    <option value="{{ $cour->id }}" {{ $ressource->cours->id == $cour->id ? 'selected' : '' }}>
                                                        {{ $cour->titre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="flex justify-end pt-4 space-x-2">
                                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Mettre à jour</button>
                                            <button type="button" data-modal-hide="edit-modal-{{ $ressource->id }}" class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination si utilisée --}}
    {{-- <div>
        {{ $ressources->links() }}
    </div> --}}

</div>
@endsection
