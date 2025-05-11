@section('content')
<!-- Composant Stats: Cartes de statistiques -->
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 p-4">
    <!-- Stat Card 1: Utilisateurs -->
    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-blue-100 rounded-xl p-4">
                    <i data-lucide="users" class="w-8 h-8 text-blue-600"></i>
                </div>
                <div class="ml-6 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-600 truncate mb-1">Total Utilisateurs</dt>
                        <dd class="flex items-baseline">
                            <div class="text-3xl font-bold text-gray-900">{{$userCount ?? 0}}</div>
                            <div class="ml-3 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 mr-1"></i>
                                12%
                                <span class="ml-1 text-gray-500 text-xs">vs mois dernier</span>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-6 py-3">
            <div class="text-sm">
                <a href="/users" class="font-medium text-blue-600 hover:text-blue-800 flex items-center justify-between">
                    Voir détails
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stat Card 2: Documents -->
    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-green-100 rounded-xl p-4">
                    <i data-lucide="file-text" class="w-8 h-8 text-green-600"></i>
                </div>
                <div class="ml-6 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-600 truncate mb-1">Total Documents</dt>
                        <dd class="flex items-baseline">
                            <div class="text-3xl font-bold text-gray-900">{{$documentCount ?? 0}}</div>
                            <div class="ml-3 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 mr-1"></i>
                                8.2%
                                <span class="ml-1 text-gray-500 text-xs">vs mois dernier</span>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-6 py-3">
            <div class="text-sm">
                <a href="/documents" class="font-medium text-green-600 hover:text-green-800 flex items-center justify-between">
                    Voir détails
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stat Card 3: Cours -->
    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-purple-100 rounded-xl p-4">
                    <i data-lucide="book-open" class="w-8 h-8 text-purple-600"></i>
                </div>
                <div class="ml-6 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-600 truncate mb-1">Total Cours</dt>
                        <dd class="flex items-baseline">
                            <div class="text-3xl font-bold text-gray-900">{{$coursCount ?? 0}}</div>
                            <div class="ml-3 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 mr-1"></i>
                                5.4%
                                <span class="ml-1 text-gray-500 text-xs">vs mois dernier</span>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-6 py-3">
            <div class="text-sm">
                <a href="/cours" class="font-medium text-purple-600 hover:text-purple-800 flex items-center justify-between">
                    Voir détails
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Stat Card 4: Examens -->
    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
        <div class="p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-orange-100 rounded-xl p-4">
                    <i data-lucide="clipboard-check" class="w-8 h-8 text-orange-600"></i>
                </div>
                <div class="ml-6 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-600 truncate mb-1">Total Examens</dt>
                        <dd class="flex items-baseline">
                            <div class="text-3xl font-bold text-gray-900">{{$examenCount ?? 0}}</div>
                            <div class="ml-3 flex items-baseline text-sm font-semibold text-orange-600">
                                <i data-lucide="activity" class="w-4 h-4 mr-1"></i>
                                En cours
                                <span class="ml-1 text-gray-500 text-xs">ce mois</span>
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-6 py-3">
            <div class="text-sm">
                <a href="/examens" class="font-medium text-orange-600 hover:text-orange-800 flex items-center justify-between">
                    Voir détails
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection