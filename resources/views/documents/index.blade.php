@extends('layouts.app')

<div class="flex h-screen"> 
    @include('components.layouts.dashboard.sidebar')

    <main class="flex-1 p-6 bg-gray-100 overflow-y-auto">
        <div class="mt-6">
            @include('components.layouts.dashboard.searehBar')
        </div>
        <div class="mt-6 mb-4">
            @include('components.layouts.dashboard.stats')
        </div>
        <div>
            {{-- @include('forms') --}}
        </div>

        @yield('content')

        {{-- @include('components.layouts.dashboard.datashou') --}}
    </main>
</div>
