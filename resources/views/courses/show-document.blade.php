<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Documents</title>
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
    <header class="bg-gradient-to-r from-indigo-700 to-blue-600 text-white py-16 shadow-xl relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] opacity-20 bg-cover bg-center"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-4xl font-bold mb-4">Course Documents</h1>
            <p class="text-xl max-w-3xl mx-auto opacity-90">Access all course materials, guides, and resources</p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-100 to-transparent"></div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-xl shadow-xl p-8 mb-10">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                <a href="courses.html" class="flex items-center text-gray-700 font-semibold hover:text-indigo-600 transition-colors group">
                    <span class="bg-gray-100 p-2 rounded-full group-hover:bg-indigo-100 transition-colors mr-3">
                        <i class="fas fa-arrow-left text-indigo-600"></i>
                    </span>
                    <span>Back to Courses</span>
                </a>
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 p-2.5" placeholder="Search documents...">
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Document 1 - PDF -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                    <div class="p-6 flex flex-col items-center">
                        <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-pdf text-4xl text-red-600"></i>
                        </div>
                        <div class="text-center">
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full mb-2 inline-block">PDF Document</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Course Syllabus</h3>
                            <p class="text-gray-600 text-sm mb-4">Complete overview of the course structure and learning objectives.</p>
                            <div class="flex justify-between text-gray-400 text-xs mb-6 px-4">
                                <span class="flex items-center"><i class="fas fa-calendar-alt mr-1"></i> May 15, 2023</span>
                                <span class="flex items-center"><i class="fas fa-file-alt mr-1"></i> 2.4 MB</span>
                            </div>
                        </div>
                        <div class="flex gap-3 w-full">
                            <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="flex-1 bg-white border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                            <button data-modal-target="pdfModal1" data-modal-toggle="pdfModal1" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-eye mr-2"></i> View
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Document 2 - Word -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                    <div class="p-6 flex flex-col items-center">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-word text-4xl text-blue-600"></i>
                        </div>
                        <div class="text-center">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full mb-2 inline-block">Word Document</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Assignment Guidelines</h3>
                            <p class="text-gray-600 text-sm mb-4">Instructions and requirements for all course assignments.</p>
                            <div class="flex justify-between text-gray-400 text-xs mb-6 px-4">
                                <span class="flex items-center"><i class="fas fa-calendar-alt mr-1"></i> Jun 2, 2023</span>
                                <span class="flex items-center"><i class="fas fa-file-alt mr-1"></i> 1.8 MB</span>
                            </div>
                        </div>
                        <div class="flex gap-3 w-full">
                            <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="flex-1 bg-white border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                            <button data-modal-target="pdfModal2" data-modal-toggle="pdfModal2" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-eye mr-2"></i> View
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Document 3 - PowerPoint -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                    <div class="p-6 flex flex-col items-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-powerpoint text-4xl text-orange-600"></i>
                        </div>
                        <div class="text-center">
                            <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full mb-2 inline-block">PowerPoint</span>
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-indigo-600 transition-colors">Lecture Slides</h3>
                            <p class="text-gray-600 text-sm mb-4">Presentation slides from all course lectures.</p>
                            <div class="flex justify-between text-gray-400 text-xs mb-6 px-4">
                                <span class="flex items-center"><i class="fas fa-calendar-alt mr-1"></i> May 28, 2023</span>
                                <span class="flex items-center"><i class="fas fa-file-alt mr-1"></i> 5.7 MB</span>
                            </div>
                        </div>
                        <div class="flex gap-3 w-full">
                            <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="flex-1 bg-white border-2 border-indigo-600 text-indigo-600 hover:bg-indigo-50 text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                            <button data-modal-target="pdfModal3" data-modal-toggle="pdfModal3" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-center py-2 px-3 rounded-lg text-sm font-semibold transition-colors flex items-center justify-center">
                                <i class="fas fa-eye mr-2"></i> View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center">
                <p>&copy; 2023 Online Learning Platform. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- PDF Modal 1 -->
    <div id="pdfModal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-2xl shadow-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                        <i class="fas fa-file-pdf text-red-600 mr-2"></i> Course Syllabus
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="pdfModal1">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-[500px] rounded-lg border border-gray-200" src="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" title="Document Viewer"></iframe>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center">
                        <i class="fas fa-download mr-2"></i> Download Document
                    </a>
                    <button data-modal-hide="pdfModal1" type="button" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 2 -->
    <div id="pdfModal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-2xl shadow-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                        <i class="fas fa-file-word text-blue-600 mr-2"></i> Assignment Guidelines
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="pdfModal2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-[500px] rounded-lg border border-gray-200" src="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" title="Document Viewer"></iframe>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center">
                        <i class="fas fa-download mr-2"></i> Download Document
                    </a>
                    <button data-modal-hide="pdfModal2" type="button" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Modal 3 -->
    <div id="pdfModal3" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-2xl shadow-2xl">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 flex items-center">
                        <i class="fas fa-file-powerpoint text-orange-600 mr-2"></i> Lecture Slides
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="pdfModal3">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-[500px] rounded-lg border border-gray-200" src="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" title="Document Viewer"></iframe>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <a href="https://www.hueber.de/media/36/978-3-19-000619-9_Programm_DaF.pdf" download class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center">
                        <i class="fas fa-download mr-2"></i> Download Document
                    </a>
                    <button data-modal-hide="pdfModal3" type="button" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialisation des composants Flowbite
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation des icônes Lucide
            lucide.createIcons();
        });
    </script>
</body>
</html>