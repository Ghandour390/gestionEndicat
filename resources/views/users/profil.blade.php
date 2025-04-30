@extends('layouts.app') 

{{-- @section('content') --}
{{-- @dd("drsrtrs") --}}
<section id="profil" class="py-16 bg-white">
  <div class="container mx-auto px-4 max-w-3xl">
    <h3 class="text-2xl font-bold text-blue-600 mb-6">Mon Profil</h3>
    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
      <div class="relative mb-6">
        <img src="{{ Auth::user()->cover ?? 'https://bookcoverzone.com/img/hero-slider/education_banner.jpg' }}" class="rounded-lg w-full h-48 object-cover" alt="cover" />
        <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-10">
          <img src="{{ Auth::user()->photo ?? 'https://img.freepik.com/free-icon/user_318-644324.jpg' }}" alt="Profile" class="rounded-full w-24 h-24 border-4 border-white shadow-md" />
        </div>
      </div>
      <div class="pt-14 text-center">
        <h4 class="text-xl font-semibold">{{ Auth::user()->lastname." ". Auth::user()->frirstname }}</h4>
        <p class="text-gray-600">{{ Auth::user()->roles()->name ?? 'Utilisateur' }}</p>
      </div>
      <form action="" method="POST" class="mt-8 space-y-4">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium">Prénom</label>
            <input type="text" name="firstname" value="{{ old('prenom', Auth::user()->firstname) }}" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Nom</label>
            <input type="text" name="lastname" value="{{ old('nom', Auth::user()->lastname) }}" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Sexe</label>
            <select name="sexe" class="mt-1 w-full border border-gray-300 rounded-md p-2">
              <option value="Homme" {{ Auth::user()->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
              <option value="Femme" {{ Auth::user()->sexe == 'Femme' ? 'selected' : '' }}>Femme</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium">Date de naissance</label>
            <input type="date" name="datNaissance" value="{{ old('naissance', Auth::user()->naissance) }}" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Téléphone</label>
            <input type="tel" name="phone" value="{{ old('phone', Auth::user()->phone) }}" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Mot de passe actuel</label>
            <input type="password" name="current_password" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
          <div>
            <label class="block text-sm font-medium">Nouveau mot de passe</label>
            <input type="password" name="new_password" class="mt-1 w-full border border-gray-300 rounded-md p-2" />
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</section>
{{-- @endsection --}}
