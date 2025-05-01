<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bookmarks</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        .bookmark-card {
            transition: all 0.3s ease;
        }
        .bookmark-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .bookmark-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        .dark-mode {
            background-color: #121212;
            color: #f5f5f5;
        }
        .dark-card {
            background-color: #1e1e1e;
        }
        .pill {
            transition: all 0.2s ease;
        }
        .pill:hover {
            transform: scale(1.05);
        }
        .bookmark-card .actions {
            opacity: 0;
            transition: all 0.2s ease;
        }
        .bookmark-card:hover .actions {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-gray-900 to-black text-white min-h-screen">
    <div id="app">
        <!-- Navigation -->


        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Filters -->
            <div class="mb-8">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-sm font-medium text-gray-700 mr-2">Filter by:</span>
                    <button class="pill bg-blue-500 text-white px-4 py-1 rounded-full text-sm font-medium">All</button>
                    <button class="pill bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">Tweets</button>
                    <button class="pill bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">Articles</button>
                    <button class="pill bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">Images</button>
                    <button class="pill bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-sm font-medium">Videos</button>
                    <div class="ml-auto flex items-center">
                        <span class="text-sm text-gray-500 mr-2">Sort by:</span>
                        <select class="bg-gray-800 border border-gray-300 rounded-md text-sm py-1 pl-2 pr-8 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>A-Z</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Collections -->
 
            <!-- Bookmarks Grid -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Recent Bookmarks</h2>
                    <span class="text-sm text-gray-500">Showing 12 of 156 bookmarks</span>
                </div>
                <div class="bookmark-grid">
                    <!-- Tweet -->
                    <div class=" bg-gray-800 bookmark-card  rounded-lg shadow-md overflow-hidden ">
                        <div class="p-4">
                            <div class="flex items-start mb-3">
                                <img src="/api/placeholder/40/40" class="h-10 w-10 rounded-full" alt="Profile Picture">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900">Jane Cooper</span>
                                        <span class="ml-2 text-sm text-gray-500">@janecooper</span>
                                    </div>
                                    <span class="text-sm text-gray-500">2 days ago</span>
                                </div>
                                <div class="ml-auto text-blue-400">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                            <p class="text-gray-800 mb-3">Just launched our new product after months of work! So excited to share it with everyone. Check it out at our website and let me know what you think!</p>
                            <div class="flex justify-between items-center">
                                <div class="flex text-gray-500 text-sm">
                                    <span class="mr-4"><i class="far fa-heart mr-1"></i> 245</span>
                                    <span><i class="far fa-comment mr-1"></i> 32</span>
                                </div>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="/api/placeholder/400/200" class="w-full h-40 object-cover" alt="Article Image">
                        <div class="p-4">
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mb-2">Article</span>
                            <h3 class="font-medium text-gray-900 mb-1">The Future of Web Development in 2025</h3>
                            <p class="text-sm text-gray-500 mb-3 line-clamp-2">Exploring the latest trends and technologies that will shape the way we build websites and applications...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">medium.com • 10 min read</span>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="/api/placeholder/400/300" class="w-full h-64 object-cover" alt="Saved Image">
                            <div class="absolute top-3 right-3 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded">
                                <i class="fas fa-image mr-1"></i> Image
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">Design Inspiration</h3>
                            <p class="text-sm text-gray-500 mb-3">Saved from dribbble.com • April 24</p>
                            <div class="flex justify-between items-center">
                                <div class="flex">
                                    <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full mr-2">design</span>
                                    <span class="bg-pink-100 text-pink-800 text-xs px-2 py-1 rounded-full">inspiration</span>
                                </div>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="/api/placeholder/400/225" class="w-full h-48 object-cover" alt="Video Thumbnail">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="h-14 w-14 bg-black bg-opacity-50 rounded-full flex items-center justify-center">
                                    <i class="fas fa-play text-white text-xl"></i>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 bg-black bg-opacity-50 text-white text-xs px-2 py-1 rounded">
                                12:34
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-medium text-gray-900 mb-1">How to Master Tailwind CSS in 20 Minutes</h3>
                            <p class="text-sm text-gray-500 mb-3">youtube.com • 258K views</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">Saved 1 week ago</span>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tweet with image -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start mb-3">
                                <img src="/api/placeholder/40/40" class="h-10 w-10 rounded-full" alt="Profile Picture">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900">Alex Morgan</span>
                                        <span class="ml-2 text-sm text-gray-500">@alexmorgan</span>
                                    </div>
                                    <span class="text-sm text-gray-500">3 days ago</span>
                                </div>
                                <div class="ml-auto text-blue-400">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                            <p class="text-gray-800 mb-3">The sunrise from my morning hike today was absolutely breathtaking! 🌄 #NatureLover</p>
                            <img src="/api/placeholder/400/200" class="w-full h-48 object-cover rounded-lg mb-3" alt="Sunrise Image">
                            <div class="flex justify-between items-center">
                                <div class="flex text-gray-500 text-sm">
                                    <span class="mr-4"><i class="far fa-heart mr-1"></i> 1.2k</span>
                                    <span><i class="far fa-comment mr-1"></i> 87</span>
                                </div>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Link Preview -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="p-4">
                            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full mb-2">Link</span>
                            <div class="flex border rounded-lg overflow-hidden">
                                <img src="/api/placeholder/100/100" class="w-24 h-24 object-cover" alt="Link Preview">
                                <div class="p-3">
                                    <h3 class="font-medium text-gray-900 text-sm mb-1">10 Essential VS Code Extensions for Web Developers</h3>
                                    <p class="text-xs text-gray-500 mb-2 line-clamp-2">Boost your productivity with these must-have extensions...</p>
                                    <span class="text-xs text-gray-400">dev.to</span>
                                </div>
                            </div>
                            <div class="mt-3 flex justify-between items-center">
                                <span class="text-xs text-gray-500">Saved 3 days ago</span>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More bookmarks... -->
                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <div class="p-4">
                            <div class="flex items-start mb-3">
                                <img src="/api/placeholder/40/40" class="h-10 w-10 rounded-full" alt="Profile Picture">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <span class="font-medium text-gray-900">Sarah Johnson</span>
                                        <span class="ml-2 text-sm text-gray-500">@sarahj</span>
                                    </div>
                                    <span class="text-sm text-gray-500">5 days ago</span>
                                </div>
                                <div class="ml-auto text-blue-400">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                            <p class="text-gray-800 mb-3">Finally finished reading "Atomic Habits" by James Clear. Highly recommend it for anyone looking to build better habits! 📚 #BookRecommendation</p>
                            <div class="flex justify-between items-center">
                                <div class="flex text-gray-500 text-sm">
                                    <span class="mr-4"><i class="far fa-heart mr-1"></i> 356</span>
                                    <span><i class="far fa-comment mr-1"></i> 42</span>
                                </div>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bookmark-card bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="/api/placeholder/400/200" class="w-full h-40 object-cover" alt="Article Image">
                        <div class="p-4">
                            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mb-2">Article</span>
                            <h3 class="font-medium text-gray-900 mb-1">How AI is Transforming Creative Industries</h3>
                            <p class="text-sm text-gray-500 mb-3 line-clamp-2">From art to music to writing, artificial intelligence is reshaping how creators work...</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">wired.com • 15 min read</span>
                                <div class="actions flex">
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-tag"></i></button>
                                    <button class="text-gray-400 hover:text-gray-600 mr-2"><i class="fas fa-share-alt"></i></button>
                                    <button class="text-red-400 hover:text-red-600"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-blue-600 hover:bg-gray-50">1</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">2</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">3</a>
                    <span class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-gray-500">...</span>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">8</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">9</a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-gray-800 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </main>

        <!-- Add Bookmark Button -->
        <div class="fixed bottom-6 right-6">
            <button class="h-14 w-14 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full shadow-lg flex items-center justify-center hover:scale-105 transition-transform">
                <i class="fas fa-plus text-white text-lg"></i>
            </button>
        </div>
    </div>

    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const body = document.body;
        const moonIcon = darkModeToggle.querySelector('i');
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            // Update all cards
            const cards = document.querySelectorAll('.bookmark-card');
            cards.forEach(card => {
                card.classList.toggle('dark-card');
                card.classList.toggle('bg-gray-800');
            });
            
            // Toggle icon
            moonIcon.classList.toggle('fa-moon');
            moonIcon.classList.toggle('fa-sun');
            
            // Toggle navbar
            const navbar = document.querySelector('nav');
            navbar.classList.toggle('bg-gray-800');
            navbar.classList.toggle('bg-gray-900');
            
            // Update search and buttons
            const searchInput = document.getElementById('search');
            searchInput.classList.toggle('bg-gray-800');
            searchInput.classList.toggle('border-gray-700');
            searchInput.classList.toggle('text-white');
            searchInput.classList.toggle('bg-gray-800');
            
            // Update pills that aren't active
            const pills = document.querySelectorAll('.pill:not(.bg-blue-500)');
            pills.forEach(pill => {
                pill.classList.toggle('bg-gray-700');
                pill.classList.toggle('text-gray-300');
                pill.classList.toggle('bg-gray-200');
                pill.classList.toggle('text-gray-700');
            });
        });
        
        // Search functionality
        const searchInput = document.getElementById('search');
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            // Demo functionality - in a real app, this would filter the items
            console.log(`Searching for: ${searchTerm}`);
        });
        
        // Demo data for bookmarks
        const bookmarks = [
            {
                type: 'tweet',
                author: 'Jane Cooper',
                username: '@janecooper',
                content: 'Just launched our new product after months of work! So excited to share it with everyone.',
                likes: 245,
                comments: 32,
                time: '2 days ago'
            },
            // Additional bookmarks would be defined here
        ];
        
        // This would handle loading more bookmarks, filtering, etc.
        function loadBookmarks(filter = 'all', sort = 'newest') {
            // Implementation would go here
            console.log(`Loading bookmarks with filter: ${filter}, sort: ${sort}`);
        }
    </script>
</body>
</html>