{{-- @extends('layouts.app') --}}

<!-- Bouton d'ouverture du modal -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal"
    class="block text-white bg-blue-800 hover:bg-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
    type="button">
    Créer un utilisateur
</button>

<!-- Modal principal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full flex justify-center items-center">
    <div class="relative w-full max-w-2xl">
        <!-- Contenu du modal -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Corps du modal -->
            <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data"
                class="space-y-6 p-6">
                @csrf

                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Créer un nouvel utilisateur</h3>

                <!-- Nom -->
                <div>
                    <label class="block mb-1 font-semibold">Nom</label>
                    <input type="text" name="lastname"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Prénom -->
                <div>
                    <label class="block mb-1 font-semibold">Prénom</label>
                    <input type="text" name="firstname"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Téléphone -->
                <div>
                    <label class="block mb-1 font-semibold">Téléphone</label>
                    <input type="text" name="phone"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email"
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
                    <input type="date" name="dateNaissance"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Spécialité -->
                <div>
                    <label class="block mb-1 font-semibold">Spécialité</label>
                    <select name="specialite"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                        @foreach($specialites as $specialite)
                            <option value="{{ $specialite->name }}"
                                {{ old('specialite', $user->specialite ?? '') === $specialite ? 'selected' : '' }}>
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
                    @if(isset($user) && $user->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/photos/' . $user->photo) }}" alt="Photo actuelle"
                                class="h-24 rounded">
                        </div>
                    @endif
                </div>

                <!-- Numéro de badge -->
                <div>
                    <label class="block mb-1 font-semibold">Numéro de badge</label>
                    <input type="number" name="numerodebadge"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                </div>

                <!-- Rôle -->
                <div>
                    <label class="block mb-1 font-semibold">Rôle</label>
                    <select name="role_id"
                        class="w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-300">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ old('role_id', $user->role_id ?? '') == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Footer -->
                <div class="flex justify-end gap-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md shadow">
                        Créer
                    </button>
                    <button data-modal-hide="default-modal" type="button"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium px-4 py-2 rounded-md border border-gray-300">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
