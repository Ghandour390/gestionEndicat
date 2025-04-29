@extends('layouts.app')



@section('content')
@php
dd($items, $columns, $title, $routeName);
@endphp
<div class="container mx-auto p-4">

    <!-- Title + Create Button -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>
        <a href="{{ route($routeName.'.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
            Créer Nouveau
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    @foreach($columns as $col)
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ ucfirst(str_replace('_', ' ', $col)) }}
                        </th>
                    @endforeach
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($items as $item)
                <tr>
                    @foreach($columns as $col)
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ data_get($item, $col) }}
                        </td>
                    @endforeach
                    <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                        <a href="{{ route($routeName.'.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                            Modifier
                        </a>
                        <form action="{{ route($routeName.'.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Voulez-vous supprimer cet élément?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($columns) + 1 }}" class="px-6 py-4 text-center">
                        Aucun résultat trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
