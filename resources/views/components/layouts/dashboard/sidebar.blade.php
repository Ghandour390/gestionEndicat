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
            <nav class="flex-1 px-2 py-4 space-y-6">
                <!-- Dashboard -->
                <div>
                    <a href="/dashboard" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">
                        <i data-lucide="layout-dashboard" class="w-6 h-6 mr-3 text-gray-300"></i>
                        Dashboard admin
                    </a>
                </div>

                <!-- Gestion des Utilisateurs -->
                <div class="space-y-1">
                    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Utilisateurs
                    </p>
                    <a href="/users" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="users" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Gestion Utilisateurs
                    </a>
                    <a href="/profil" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="user" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Profil
                    </a>
                </div>

                <!-- Gestion Académique -->
                <div class="space-y-1">
                    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Académique
                    </p>
                    <a href="/cours" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="book" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Gestion Cours
                    </a>
                    <a href="/classes" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="layers" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Gestion Classes
                    </a>
                    <a href="/classerooms" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="building" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Gestion Classrooms
                    </a>
                </div>

                <!-- Ressources Pédagogiques -->
                <div class="space-y-1">
                    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Ressources
                    </p>
                    <a href="/documents" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="file-text" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Documents
                    </a>
                    <a href="/videos" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="video" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Vidéos
                    </a>
                    <a href="/ressources" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="folder" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Ressources
                    </a>
                </div>

                <!-- Évaluation -->
                <div class="space-y-1">
                    <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Évaluation
                    </p>
                    <a href="/examens" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                        <i data-lucide="file" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                        Examens
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>

{{-- @endsection --}}