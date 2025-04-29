{{-- @extends('classes.index') --}}
@section('content')
<!-- Composant Stats: Cartes de statistiques -->
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
    <!-- Stat Card 1: Utilisateurs -->
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-primary-100 rounded-md p-3">
                    <i data-lucide="users" class="w-6 h-6 text-primary-600"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Total Utilisateurs</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">{{$userCount ?? 0}}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 self-center"></i>
                                <span class="sr-only">Augmentation</span>
                                12%
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card 2: Documents -->
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                    <i data-lucide="shopping-cart" class="w-6 h-6 text-green-600"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">documents</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">{{$documentCount ?? 0}}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 self-center"></i>
                                <span class="sr-only">Augmentation</span>
                                8.2%
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card 3: Revenus -->
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                    <i data-lucide="dollar-sign" class="w-6 h-6 text-yellow-600"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Revenus</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">{{$revenue ?? 0}}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                <i data-lucide="trending-up" class="w-4 h-4 self-center"></i>
                                <span class="sr-only">Augmentation</span>
                                5.4%
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Stat Card 4: Tickets Support -->
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-red-100 rounded-md p-3">
                    <i data-lucide="alert-circle" class="w-6 h-6 text-red-600"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">Tickets Support</dt>
                        <dd class="flex items-baseline">
                            <div class="text-2xl font-semibold text-gray-900">{{$ticketCount ?? 0}}</div>
                            <div class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                <i data-lucide="trending-down" class="w-4 h-4 self-center"></i>
                                <span class="sr-only">Diminution</span>
                                3.2%
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>