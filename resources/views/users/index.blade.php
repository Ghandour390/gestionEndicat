@extends('layouts.compenant2')
@extends('layouts.app')

@section('content')
   <!-- resources/views/users/index.blade.php -->


    <div class="container mx-auto px-4 py-8">
        <!-- Bouton d'ajout -->
        <div>

            @include('users.create')
        </div>

        <!-- Tableau des utilisateurs -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prénom</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Téléphone</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date de Naissance</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Photo</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rôle</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr class="hover:bg-gray-40">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $user->lastname }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $user->firstname }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $user->phone }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $user->dateNaissance }}</td>
                        <td class="px-4 py-2 whitespace-nowrap"><img src="{{ asset('storage/public/' . $user->photo) }}" alt="Photo{{ $user->firstname }}" ></td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $user->roles->name }}
                            </span>
                        </td>
                       <td>
                          
                                @include('users.edit')
                          
                            <button class="text-red-600 hover:text-red-900">
                                🗑️
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
    </div>

</td>
@endsection