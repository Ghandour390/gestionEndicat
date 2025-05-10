@extends('layouts.app')

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white  hover:bg-blue-800 " type="button">
    ✏️
  </button>
  
  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
              <!-- Modal header -->
              {{-- <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                 
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div> --}}
              <!-- Modal body -->
              <form method="POST" action="{{ route('admin.update', $user)  }}" enctype="multipart/form-data" class="space-y-4 max-w-2xl mx-auto p-6 bg-white rounded-xl shadow">
                @csrf
                
                    @method('PUT')
              
            
                <!-- Nom -->
                <div>
                    <label class="block mb-1 font-semibold">Nom</label>
                    <input type="text" name="lastename" value="{{ old('lastename', $user->lastname ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                <!-- Prénom -->
                <div>
                    <label class="block mb-1 font-semibold">Prénom</label>
                    <input type="text" name="firstname" value="{{ old('firstname', $user->firstname ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                <!-- Téléphone -->
                <div>
                    <label class="block mb-1 font-semibold">Téléphone</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->phone ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                <!-- Email -->
                <div>
                    <label class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                <!-- Mot de passe -->
                <div>
                    <label class="block mb-1 font-semibold">Mot de passe</label>
                    <input type="password" name="password" class="w-full border-gray-300 rounded-md shadow-sm" {{ isset($user) ? '' : 'required' }}>
                </div>
            
                <!-- Date de naissance -->
                <div>
                    <label class="block mb-1 font-semibold">Date de naissance</label>
                    <input type="date" name="dateNaissance" value="{{ old('dateNaissance', $user->dateNaissance ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                
                <!-- Spécialité -->
                {{-- @dd($specialites); --}}
                
                <div>
                    
                    <label class="block mb-1 font-semibold">Spécialité</label>
                    <select name="specialite" class="w-full border-gray-300 rounded-md shadow-sm">
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
                    <input type="file" name="photo" class="w-full border-gray-300 rounded-md shadow-sm">
                    @if(isset($user) && $user->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/photos/' . $user->photo) }}" alt="Photo actuelle" class="h-24 rounded">
                        </div>
                    @endif
                </div>
            
                <!-- Numéro de badge -->
                <div>
                    <label class="block mb-1 font-semibold">Numéro de badge</label>
                    <input type="number" name="numerodDeBadge" value="{{ old('numerodDeBadge', $user->numerodDeBadge ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
            
                <!-- Rôle -->
                <div>
                    <label class="block mb-1 font-semibold">Rôle</label>
                    <select name="role_id" class="w-full border-gray-300 rounded-md shadow-sm">
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ (old('role_id', $user->role_id ?? '') == $role->id) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            
                <!-- Bouton submit -->
                <div class="pt-4">
                  
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md shadow">
                          {{ isset($user) ? 'Mettre à jour' : 'Créer' }}
                      </button>                 
                      <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </form>
            
              <!-- Modal footer -->
              </div>
          </div>
      </div>
  </div>
  