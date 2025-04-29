@extends('documents.index')

<body class="bg-gray-100 font-sans">
    {{-- <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 px-4 bg-gray-900">
                    <h1 class="text-xl font-semibold text-white">Admin Panel</h1>
                </div>
                <div class="flex flex-col flex-1 overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="/dashboard" class="flex items-center px-2 py-2 text-sm font-medium text-white bg-gray-900 rounded-md group">
                            <i data-lucide="layout-dashboard" class="w-6 h-6 mr-3 text-gray-300"></i>
                            Dashoard admin
                        </a>
                        <a href="/users" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i data-lucide="users" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                            gestion Utilisateurs
                        </a>
                        <a href="/cours" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i data-lucide="book" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                            gestion cours
                        </a>
                        <a href="/documents" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i data-lucide="file-text" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                            gestion document
                        </a>
                        <a href="/videos" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i data-lucide="video" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                            gestion video
                        </a>
                        <a href="/examens" class="flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i data-lucide="file" class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300"></i>
                            gestion examen                        </a>
                    </nav>
                </div>
            </div>
        </div> --}}
{{-- 
        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        <button class="p-1 mr-4 text-gray-500 rounded-md md:hidden hover:text-gray-900 focus:outline-none">
                            <i data-lucide="menu" class="w-6 h-6"></i>
                        </button>
                        <h2 class="text-lg font-medium text-gray-900">Tableau de bord</h2>
                    </div>
                    <div class="flex items-center">
                        <div class="relative ml-3">
                            <div class="flex items-center">
                                <button class="flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" id="user-menu-button">
                                    <span class="sr-only">Ouvrir le menu utilisateur</span>
                                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </button>
                                <span class="ml-3 text-sm font-medium text-gray-700">Admin User</span>
                                <i data-lucide="chevron-down" class="w-5 h-5 ml-1 text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header> --}}

            {{-- <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-4 sm:p-6 lg:p-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Stat Card 1 -->
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
                                            <div class="text-2xl font-semibold text-gray-900">{{$data->count()}}</div>
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
                    </div> --}}

                    {{-- <!-- Stat Card 2 -->
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
                                            <div class="text-2xl font-semibold text-gray-900">452</div>
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
                    </div> --}}
{{-- 
                    <!-- Stat Card 3 -->
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
                                            <div class="text-2xl font-semibold text-gray-900">€24,500</div>
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
                    </div> --}}
{{-- 
                    <!-- Stat Card 4 -->
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
                                            <div class="text-2xl font-semibold text-gray-900">23</div>
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
                </div> --}}


                <!-- Recent Orders Table -->
              
                @section('content')
            
                <div class="mt-8">
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $title }}</h3>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-500">Voir tout</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        @foreach ($thead as $item)
                                      
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $item }}</th>
                                        @endforeach

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($data as $item)
                                    <tr>
                                    
                                     @foreach ($item->getAttributes() as $key => $value)
                                        @if(in_array($key, $thead) && !is_array($value) && $key != 'relations')
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$value}}</td>
                                        @endif
                                     @endforeach
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                         <form action="{{$route}}/{{$item->id}}?? /admins" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">suprimie</button>
                                         </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                        
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex-1 flex justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Précédent</a>
                                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Suivant</a>
                                </div>
                                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur <span class="font-medium">24</span> résultats
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <span class="sr-only">Précédent</span>
                                                <i data-lucide="chevron-left" class="h-5 w-5"></i>
                                            </a>
                                            <a href="#" aria-current="page" class="z-10 bg-primary-50 border-primary-500 text-primary-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">3</a>
                                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">8</a>
                                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">9</a>
                                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">10</a>
                                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                                <span class="sr-only">Suivant</span>
                                                <i data-lucide="chevron-right" class="h-5 w-5"></i>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions and Recent Activity -->
                
    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
         @endsection

</body>
</html>