<form method="GET" class="flex items-center space-x-2">
    <input type="text" 
           name="search" 
           placeholder="Rechercher..." 
           value="{{ request('search') }}"
           class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    
    <button type="submit" 
            class="bg-gray-200 text-gray-700 px-3 py-2 rounded-md hover:bg-gray-300">
        🔍
    </button>
</form>
