@extends('documents.index')

<body class="bg-gray-50 font-sans">
    @section('content')
    <div class="mt-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center bg-indigo-50">
                <h3 class="text-xl font-medium text-indigo-800">{{ $title }}</h3>
                @include('forms')
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-indigo-50">
                        <tr>
                            @foreach ($thead as $item)
                                <th id=scope="col" class="px-6 py-3 text-left text-xs font-medium text-indigo-700 uppercase tracking-wider">
                                    {{ str_replace('_', ' ', $item) }}
                                </th>
                            @endforeach
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-indigo-700 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                  
                        @foreach ($data as $item)
                        <tr class="hover:bg-indigo-50 transition-colors duration-150">
                            @foreach ($thead as $field)
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    @php
                                        $value = $item->{$field} ?? null;
                                    @endphp
                    
                                    @if(is_string($value) || is_numeric($value))
                                        {{ $value }}
                                    @elseif(is_bool($value))
                                        {{ $value ? 'Oui' : 'Non' }}
                                    @elseif(is_object($value))
                                        @if(method_exists($value, 'titre'))
                                            {{ $value->titre }}
                                        @elseif(property_exists($value, 'name') || property_exists($value, 'titre') || property_exists($value, 'id'))
                                            {{ $value->name ?? $value->titre ?? $value->id }}
                                        @else
                                            [Objet]
                                        @endif
                                    @elseif(is_array($value))
                                        {{ implode(', ', array_map(function($val) {
                                            if (is_object($val)) {
                                                return $val->titre ?? $val->name ?? $val->id ?? '[Objet]';
                                            }
                                            return is_bool($val) ? ($val ? 'Oui' : 'Non') : (string) $val;
                                        }, $value)) }}
                                    @elseif(is_null($value))
                                        <span class="text-gray-400">—</span>
                                    @else
                                        {{ (string) $value }}
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    {{-- @endforeach --}}
                    
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex gap-2">
                                    {{-- <button data-modal-target="default-modal{{ $item->id }}" data-modal-toggle="default-modal" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-md transition-colors duration-200" type="button">
                                        Modifier
                                      </button> --}}
                                      
                                    @include('modalupdate')
                                    <form action="{{ $route }}/{{ $item->id }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')" 
                                            class="bg-rose-500 hover:bg-rose-600 text-white px-3 py-1 rounded-md transition-colors duration-200">
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
    </div>

    

    {{-- @include('components.layouts.dashboard.datashou') --}}
    @endsection

    @include("layouts.modal")
</body>