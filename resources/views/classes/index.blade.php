@extends('layouts.app')

<div class="flex h-screen"> 
    @include('components.layouts.dashboard.sidebar')

    <!-- Main content -->
    <main class="flex-1 p-6 bg-gray-100 overflow-y-auto">
        <div class="mt-6">

            @include('components.layouts.dashboard.searehBar')

        </div>
        <div class=" mt-6 mb-4">

            {{-- Composant Stats: Cartes de statistiques --}}

            @include('components.layouts.dashboard.stats')

        </div>

        {{-- @yield('content') --}}
        @include('components.layouts.dashboard.datashou')

    </main>

</div>
