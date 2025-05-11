<!-- Composant SearchBar: Barre de navigation supérieure -->
<header class="bg-white shadow">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <!-- Titre de la page et bouton menu mobile -->
        <div class="flex items-center">
            <button class="p-1 mr-4 text-gray-500 rounded-md md:hidden hover:text-gray-900 focus:outline-none">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
            <h2 class="text-lg font-medium text-gray-900">Tableau de bord</h2>
        </div>
        <!-- Profil utilisateur -->
        <div class="flex items-center">
            <div class="relative ml-3">
                <div class="flex items-center">
                    <button class="flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" id="user-menu-button">
                        <span class="sr-only">Ouvrir le menu utilisateur</span>
                        @if(auth()->user()->photo)
                            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . auth()->user()->photo) }}" alt="{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}">
                        @else
                            <img class="w-8 h-8 rounded-full" src="{{ asset('images/default-avatar.png') }}" alt="Default avatar">
                        @endif
                    </button>
                    <span class="ml-3 text-sm font-medium text-gray-700">Admin User</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 ml-1 text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>
</header>