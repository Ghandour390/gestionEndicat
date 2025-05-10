@extends('layouts.compenant2') {{-- Choisis entre layouts.app ou layouts.compenant2 --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Bouton d'ajout -->
    <div>
        {{-- @include('users.create') --}}
    </div>

    <!-- Tableau des utilisateurs -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">document</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">resource</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">cours</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($documents as $document)
                {{-- @dd($document->ressource->cours) --}}
                <tr class="hover:bg-gray-40">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $document->document }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $document->ressource->titre }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $document->ressource->cours->titre }}</td>
                    <td class="px-4 py-2">
                        <!-- Bouton Éditer -->
                        <!-- Bouton d'édition -->
<button data-modal-target="edit-modal-{{ $document->id }}" data-modal-toggle="edit-modal-{{ $document->id }}"
    class="text-blue-600 hover:text-blue-800 hover:underline">
    ✏️
</button>

<!-- Modal de modification -->
<div id="edit-modal-{{ $document->id}}" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen bg-black bg-opacity-50 flex justify-center items-center">
    <div class="relative w-full max-w-2xl">
        <!-- Contenu du modal -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
            <form method="POST" action="{{ route('documents.update', $document->id) }}" enctype="multipart/form-data"
                class="space-y-6 p-6">
                @csrf
                @method('PUT')

                {{-- <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Modifier l'utilisateur : {{ $user->firstname }}</h3> --}}

                <!-- Prénom -->
                <div>
                    <label class="block mb-1 font-semibold">document</label>
                    <input type="file" name="document" value="{{ old('firstname', $document->document) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Rôle -->
                <div>
                    <label class="block mb-1 font-semibold">Ressource</label>
                    <select name="role_id"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                        @foreach($ressources as $ressouce)
                            <option value="{{ $ressouce->id }}"
                                {{ old('ressource_id')  ? 'selected' : '' }}>
                                {{ $ressouce->titre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow">
                        Mettre à jour
                    </button>
                    <button type="button" data-modal-hide="edit-modal-{{ $document->id }}"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded-md border border-gray-300">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


                        <!-- Bouton Supprimer -->
                        <form action="documents/delete/{{ $document->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-900">🗑️</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    {{-- <div class="mt-4">
        {{ $users->links() }}
    </div> --}}
</div>
@endsection
