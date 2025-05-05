{{-- @extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">{{ $title ?? 'Liste' }}</h1>
        <form action="{{ route('toggle-form') }}" method="GET">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                Ajouter <i class="fas fa-plus ml-2"></i>
            </button>
        </form>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    @foreach($thead as $header)
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ $header }}
                        </th>
                    @endforeach
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($data as $item)
                    <tr>
                        @foreach($thead as $key)
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if(is_object($item->$key))
                                    {{ $item->$key->name ?? $item->$key->titre ?? '' }}
                                @else
                                    {{ $item->$key }}
                                @endif
                            </td>
                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                            <a href="{{ $route }}/{{ $item->id }}/edit-form" 
                               class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-md inline-block">
                                Modifier
                            </a>
                            <form action="{{ $route }}/{{ $item->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection --}}