@extends('layouts.compenant2')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Contenu</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ressource</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($vidieo as $video)
                <tr class="hover:bg-gray-40">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $video->ressource->titre ?? 'Non assigné' }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <video width="200" controls>
                            <source src="{{ asset('storage/' . $video->contenu) }}" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de vidéos.
                        </video>
                    </td>
                    <td class="px-4 py-2">
                        <!-- Bouton Éditer -->
                        <button data-modal-target="edit-modal-{{ $video->id }}" data-modal-toggle="edit-modal-{{ $video->id }}"
                            class="text-blue-600 hover:text-blue-800 hover:underline">
                            ✏️
                        </button>

                        <!-- Modal de modification -->
                        <div id="edit-modal-{{ $video->id}}" tabindex="-1" aria-hidden="true"
                            class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen bg-black bg-opacity-50 flex justify-center items-center">
                            <div class="relative w-full max-w-2xl">
                                <div class="bg-white rounded-lg shadow dark:bg-gray-700">
                                    <form method="POST" action="{{ route('videos.update', $video->id) }}" enctype="multipart/form-data"
                                        class="space-y-6 p-6">
                                        @csrf
                                        @method('PUT')

                                        <div>
                                            <label class="block mb-1 font-semibold">Contenu Vidéo</label>
                                            <input type="file" name="contenu" accept="video/*"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                        </div>

                                        <div>
                                            <label class="block mb-1 font-semibold">Ressource</label>
                                            <select name="ressource_id"
                                                class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                                                <option value="">Sélectionner une ressource</option>
                                                @foreach($ressources as $res)
                                                    <option value="{{ $res->id }}"
                                                        {{ old('ressource_id', $video->ressource_id) == $res->id ? 'selected' : '' }}>
                                                        {{ $res->titre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                                            <button type="submit"
                                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow">
                                                Mettre à jour
                                            </button>
                                            <button type="button" data-modal-hide="edit-modal-{{ $video->id }}"
                                                class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded-md border border-gray-300">
                                                Annuler
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Bouton Supprimer -->
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" class="inline">
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

    {{-- Pagination --}}
    {{-- @if($vidieo instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="mt-4">
            {{ $vidieo->links() }}
        </div>
    @endif --}}
</div>
@endsection