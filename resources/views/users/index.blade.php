@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Gestion des utilisateurs</h2>
        <button 
            class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded"
            onclick="document.getElementById('createModal').classList.remove('hidden')"
        >
            Créer un utilisateur
        </button>
    </div>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Nom</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Rôle</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <tr>
                <td class="px-4 py-2">Jean Dupont</td>
                <td class="px-4 py-2">jean@example.com</td>
                <td class="px-4 py-2">Administrateur</td>
                <td class="px-4 py-2 space-x-2">
                    <button 
                        class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded"
                        onclick="document.getElementById('editModal').classList.remove('hidden')"
                    >
                        Modifier
                    </button>
                    <button 
                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"
                        onclick="confirm('Voulez-vous supprimer cet utilisateur ?')"
                    >
                        Supprimer
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Créer -->
<div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Créer un utilisateur</h3>
            <button onclick="document.getElementById('createModal').classList.add('hidden')" class="text-gray-600 text-2xl leading-none">&times;</button>
        </div>
        <form>
            <input class="w-full border rounded px-3 py-2 mb-3" type="text" placeholder="Nom">
            <input class="w-full border rounded px-3 py-2 mb-3" type="email" placeholder="Email">
            <input class="w-full border rounded px-3 py-2 mb-3" type="password" placeholder="Mot de passe">
            <input class="w-full border rounded px-3 py-2 mb-3" type="text" placeholder="Rôle">
            <div class="flex justify-end space-x-2">
                <button type="button" class="px-4 py-2 bg-gray-300 rounded" onclick="document.getElementById('createModal').classList.add('hidden')">Annuler</button>
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Créer</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Modifier -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Modifier l'utilisateur</h3>
            <button onclick="document.getElementById('editModal').classList.add('hidden')" class="text-gray-600 text-2xl leading-none">&times;</button>
        </div>
        <form>
            <input class="w-full border rounded px-3 py-2 mb-3" type="text" value="Jean Dupont">
            <input class="w-full border rounded px-3 py-2 mb-3" type="email" value="jean@example.com">
            <input class="w-full border rounded px-3 py-2 mb-3" type="text" value="Administrateur">
            <div class="flex justify-end space-x-2">
                <button type="button" class="px-4 py-2 bg-gray-300 rounded" onclick="document.getElementById('editModal').classList.add('hidden')">Annuler</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Modifier</button>
            </div>
        </form>
    </div>
</
