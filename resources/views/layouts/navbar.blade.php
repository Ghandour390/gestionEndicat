@extends('layouts.app')
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b bg-white shadow-sm">
        <div class="container mx-auto px-4 flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="index.html" class="flex items-center gap-2 font-bold text-xl">
                    <img src="https://www.coursinfo.fr/wp-content/uploads/2016/05/cours1.png" alt="Logo" width="32" height="32" class="rounded">
                    <span>EduSupport</span>
                </a>
            </div>
            <nav class="hidden md:flex gap-6">
                <ul class="flex space-x-6">
                    <li><a href="index.html" class="text-sm font-medium text-blue-600 hover:text-blue-700 transition-colors">Accueil</a></li>
                    <li><a href="categories.html" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Catégories</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">À propos</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Contact</a></li>
                </ul>
            </nav>
            <div class="flex items-center gap-2">
                @if(Auth::check())
                {{-- <a href="login" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">{{Auth::user()->lastname ." " .Auth::user()->firstname}}</a> --}}
                <div x-data="{ open: false }" class="mb-4 text-end">
                 
                    <button @click="open = !open" class="text-blue-600 hover:underline font-bold">
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                    </button>
                
                 
                    <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded shadow">
                        <p><a class="font-semibold" href="/logout">logout</a> </p>
                        <p><a class="font-semibold" href="/profil">profil</a></p>
                    </div>
                </div>
                @elseif(!Auth::check())
                <a href="login" class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">Connexion</a>
                <a href="register" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 transition-colors">S'inscrire</a>
                @endif
            </div>
            <button class="md:hidden flex flex-col space-y-1.5" aria-label="Menu" id="mobile-menu-button">
                <span class="block w-6 h-0.5 bg-gray-900"></span>
                <span class="block w-6 h-0.5 bg-gray-900"></span>
                <span class="block w-6 h-0.5 bg-gray-900"></span>
            </button>
        </div>
        <!-- Mobile menu (hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="container mx-auto px-4 py-3 space-y-1">
                <a href="index.html" class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 hover:bg-gray-100">Accueil</a>
                <a href="categories.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Catégories</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">À propos</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Contact</a>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    {{-- @php
                    dd(Auth::user());
                    @endphp --}}
                    

                    @if(Auth::check())
                    <div x-data="{ open: false }" class="mb-4 text-end">
                 
                        <button @click="open = !open" class="text-blue-600 hover:underline font-bold">
                            {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                        </button>
                    
                     
                        <div x-show="open" x-transition class="mt-2 p-4 bg-gray-100 rounded shadow">
                            <p><a class="font-semibold" href="/logout">logout</a> </p>
                            <p><a class="font-semibold" href="/profil">profil</a></p>
                        </div>
                    @elseif(!Auth::check())
                    <a href="login.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Connexion</a>
                    <a href="register.html" class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 hover:bg-gray-100">S'inscrire</a>
                    @endif 
                </div>
            </div>
        </div>
    </header>