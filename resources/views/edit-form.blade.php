@extends('layouts.app')

<div class="fixed inset-0 bg-black bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center">
    <div class="relative w-full max-w-2xl mx-4 md:mx-auto bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between px-5 py-4 border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Modifier</h3>
            <a href="{{ url()->previous() }}" class="text-gray-400 hover:text-gray-900 hover:bg-gray-200 dark:hover:text-white dark:hover:bg-gray-600 rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13"/>
                </svg>
            </a>
        </div>

        <form method="POST" action="{{ $route.'/'.$item }}" class="p-6 space-y-5">
            @csrf
            @method('PUT')
            
            @foreach ($column as $key => $value)
                @if(is_array($value) && isset($value['select']))
                    @foreach ($value['select'] as $selectKey => $options)
                        <div>
                            <label for="{{ $selectKey }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                {{ ucfirst(str_replace('_id', '', $selectKey)) }}
                            </label>
                            <select name="{{ $selectKey }}" id="{{ $selectKey }}" class="w-full rounded-md border-gray-300 text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Sélectionner une option</option>
                                @foreach ($options as $option)
                                    <option value="{{ $option->id ?? $option }}" 
                                            {{ ($item->{$selectKey} == ($option->id ?? $option)) ? 'selected' : '' }}>
                                        {{ $option->name ?? $option->titre ?? $option }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @endforeach
                @elseif($key === 'status' && is_array($value))
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            Status
                        </label>
                        <select name="status" id="status" class="w-full rounded-md border-gray-300 text-sm dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Sélectionner un status</option>
                            @foreach ($value as $status)
                                <option value="{{ $status }}" {{ $item->status === $status ? 'selected' : '' }}>
                                    {{ ucfirst($status) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @elseif(!is_array($value))
                    <div>
                        <label for="{{ $key }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                            {{ ucfirst($key) }}
                        </label>
                        <input type="{{ $value }}" 
                               name="{{ $key }}" 
                               id="{{ $key }}"
                               value="{{ $item->{$key} }}"
                               class="w-full rounded-md border-gray-300 p-2 dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:ring-blue-500 focus:border-blue-500"
                               required>
                    </div>
                @endif
            @endforeach

            <div class="flex justify-end pt-4 border-t dark:border-gray-600 space-x-2">
                <a href="{{ url()->previous() }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                    Annuler
                </a>
                <button type="submit" class="bg-amber-600 text-white font-medium rounded-lg text-sm px-5 py-2.5 hover:bg-amber-700 focus:outline-none focus:ring-4 focus:ring-amber-300">
                    Modifier
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Affichage des messages d'erreur --}}
@if ($errors->any())
    <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif