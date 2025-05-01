{{-- @extends('classes.index') --}}
{{-- @section('sidebar') --}}
    
<!-- Composant Sidebar: Barre latérale de navigation -->
<div class="hidden md:flex md:flex-shrink-0 h-screen"> 
    <div class="flex flex-col w-64 bg-gray-800">
        <!-- En-tête de la sidebar -->
        <div class="flex items-center justify-center h-16 px-4 bg-gray-900">
            <h1 class="text-xl font-semibold text-white">Admin Panel</h1>
        </div>
        <!-- Zone de navigation principale -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-1">
                <!-- Lien actif -->
                <a href="/dashboard" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">
                    <i data-lucide="layout-dashboard" class="w-6 h-6 mr-3 text-gray-300"></i>
                    Dashboard admin
                </a>
                <!-- Liens classiques -->
                <a href="/users" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="users" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Utilisateurs
                </a>
                <a href="/cours" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="book" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Cours
                </a>
                <a href="/documents" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="file-text" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Documents
                </a>
                <a href="/videos" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="video" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Vidéos
                </a>
                <a href="/examens" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="file" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Examens
                </a>
                <!-- Liens ajoutés -->
                <a href="/classes" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="layers" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Classes
                </a>
                <a href="/classerooms" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="building" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Gestion Classrooms
                </a>
                <a href="/profil" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                    <i data-lucide="user" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                    Profil
                </a>
            </nav>
        </div>
    </div>
</div>

{{-- @endsection --}}