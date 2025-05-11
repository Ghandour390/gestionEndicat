@extends('layouts.compenant2') {{-- Choisis entre layouts.app ou layouts.compenant2 --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Bouton d'ajout -->
    <div>
        @include('users.create')
    </div>

    <!-- Tableau des utilisateurs -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prénom</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Téléphone</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date de Naissance</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Photo</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rôle</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                <tr class="hover:bg-gray-40">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $user->lastname }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $user->firstname }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $user->phone }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $user->dateNaissance }}</td>
                    <td class="px-4 py-2 whitespace-nowrap">
                        <img src="{{ $user->photo }}" alt="Photo {{ $user->firstname }}" class="h-12 rounded" />
                    </td>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ $user->roles->name }}
                        </span>
                    </td>
                    <td class="px-4 py-2">
                        <!-- Bouton Éditer -->
                        <!-- Bouton d'édition -->
<button data-modal-target="edit-modal-{{ $user->id }}" data-modal-toggle="edit-modal-{{ $user->id }}"
    class="text-blue-600 hover:text-blue-800 hover:underline">
    ✏️
</button>

<!-- Modal de modification -->
<div id="edit-modal-{{ $user->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-screen bg-black bg-opacity-50 flex justify-center items-center">
    <div class="relative w-full max-w-2xl">
        <!-- Contenu du modal -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
            <form method="POST" action="{{ route('admin.update', $user->id) }}" enctype="multipart/form-data"
                class="space-y-6 p-6">
                @csrf
                @method('PUT')

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Modifier l'utilisateur : {{ $user->firstname }}</h3>

                <!-- Prénom -->
                <div>
                    <label class="block mb-1 font-semibold">Prénom</label>
                    <input type="text" name="firstname" value="{{ old('firstname', $user->firstname) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Nom -->
                <div>
                    <label class="block mb-1 font-semibold">Nom</label>
                    <input type="text" name="lastname" value="{{ old('lastname', $user->lastname) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Téléphone -->
                <div>
                    <label class="block mb-1 font-semibold">Téléphone</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Mot de passe -->
                <div>
                    <label class="block mb-1 font-semibold">Mot de passe</label>
                    <input type="password" name="password"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Date de naissance -->
                <div>
                    <label class="block mb-1 font-semibold">Date de naissance</label>
                    <input type="date" name="dateNaissance" value="{{ old('dateNaissance', $user->dateNaissance) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Spécialité -->
                <div>
                    <label class="block mb-1 font-semibold">Spécialité</label>
                    <select name="specialite"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                        @foreach($specialites as $specialite)
                            <option value="{{ $specialite->name }}"
                                {{ old('specialite', $user->specialite) === $specialite->name ? 'selected' : '' }}>
                                {{ ucfirst($specialite->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Photo -->
                <div>
                    <label class="block mb-1 font-semibold">Photo</label>
                    <input type="file" name="photo"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                    @if($user->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/photos/' . $user->photo) }}" alt="Photo actuelle"
                                class="h-24 rounded">
                        </div>
                    @endif
                </div>

                <!-- Numéro de badge -->
                <div>
                    <label class="block mb-1 font-semibold">Numéro de badge</label>
                    <input type="number" name="numerodDeBadge" value="{{ old('numerodDeBadge', $user->numerodDeBadge) }}"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Rôle -->
                <div>
                    <label class="block mb-1 font-semibold">Rôle</label>
                    <select name="role_id"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
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
                    <button type="button" data-modal-hide="edit-modal-{{ $user->id }}"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded-md border border-gray-300">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


                       <form action="/admin/delete/{{$user->id}}" method="POST">
                        @csrf
                    @method('DELETE')
                   
                        <button class="text-red-600 hover:text-red-900" type="submit">🗑️</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
