<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courses</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-indigo-700 to-blue-600 text-white py-20 shadow-xl relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] opacity-20 bg-cover bg-center"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-5xl font-extrabold mb-6 tracking-tight">Featured Courses</h1>
            <p class="text-xl max-w-3xl mx-auto opacity-90 font-light">Expand your knowledge with our premium online courses designed for modern learners</p>
            <div class="mt-8">
                <a href="#courses" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-white hover:bg-gray-50 shadow-md transition-all duration-300 hover:shadow-lg">
                    Browse Courses <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-100 to-transparent"></div>
    </header>

    <!-- Main Content -->
    <main id="courses" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Explore Our Courses</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Choose from a variety of professional courses designed to help you advance your career and expand your knowledge</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
            <!-- Course Card 1 -->
            @foreach ($courses as $cours )
                
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                <div class="relative h-56">
                    <img src="{{ $cours->couver }}" alt="Web Development Course" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-1 rounded-full text-sm font-semibold shadow-md">
                        Popular
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Development</span>
                        <div class="ml-auto flex items-center text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 text-sm ml-1">(4.8)</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $cours->titre}}</h3>
                    <p class="text-gray-600 mb-6">{{ $cours->discription }}</p>
                    <div class="flex justify-between text-gray-500 text-sm mb-6">
                        <span class="flex items-center"><i class="fas fa-book mr-2 text-indigo-500"></i> {{ $cours->ressources->count() }}lessons</span>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('showVideos', $cours->id) }}" class="flex-1 flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-4 rounded-lg font-semibold text-sm transition-all">
             <i class="fas fa-play-circle mr-2">{{ $cours->ressources->pluck('videos')->flatten()->count() }}</i> Show Videos
                        </a>
                        <a href="show-document/{{ $cours->id }}" class="flex-1 flex items-center justify-center bg-white border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 py-3 px-4 rounded-lg font-semibold text-sm transition-all">
                            <i class="fas fa-file-alt mr-2">{{ $cours->ressources->pluck('documents')->flatten()->count()  }}</i> Show Documents
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Online Learning</h3>
                    <p class="text-gray-400">Providing quality education and professional development courses to help you achieve your goals.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Courses</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Marketing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Data Science</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="text-gray-400">Subscribe to our newsletter</p>
                    <div class="mt-2 flex">
                        <input type="email" placeholder="Your email" class="bg-gray-800 text-white px-4 py-2 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-md transition-colors">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center">
                <p>&copy; 2023 Online Learning Platform. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialisation des composants Flowbite
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation des icônes Lucide
            lucide.createIcons();
        });
    </script>
</body>
</html>