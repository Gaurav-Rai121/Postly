<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postly - Modern Review Platform</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="./newlogo2.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

<link rel="stylesheet" href="./styles/tweet.style.css">
</head>

<body class="bg-gradient-to-b from-gray-900 to-black text-white min-h-screen">
    <!-- Main Layout -->
    <div class="flex min-h-screen">
        <!-- Left Sidebar - Hidden on mobile, visible on medium screens and up -->
        <?php include('../../components/common/header.php') ?>
        <?php include('../../components/common/betaBanner.php') ?>

        <header
            class="bg-gradient-to-r from-gray-900/95 via-gray-900/98 to-gray-900/95 backdrop-blur-md shadow-lg border-b border-gray-800/50 fixed top-0 left-64 right-0 z-20">
            <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
                <!-- Enhanced Profile Section -->
                <div class="flex items-center">
                    <div class="relative group">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-0.5 shadow-lg shadow-blue-600/20">
                            <img src="./images/imageTwo.jpeg" alt="Profile Image"
                                class="w-full h-full object-cover rounded-full ring-2 ring-gray-800/50">
                        </div>
                        <div
                            class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-900 pulse-dot">
                        </div>
                    </div>

                    <div class="ml-3">
                        <span class="text-base font-semibold text-white">John Doe</span>
                        <div class="flex items-center text-xs text-gray-400">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-green-500 mr-1"></span>
                            <span>Online</span>
                        </div>
                    </div>
                </div>

                <!-- Search Bar (Added) -->
                <div class="hidden md:flex items-center flex-grow mx-8">
                    <div class="relative w-full max-w-md">
                        <input type="text" placeholder="Search..."
                            class="w-full bg-gray-800/60 text-gray-300 pl-10 pr-4 py-2 rounded-full border border-gray-700/50 focus:outline-none focus:ring-2 focus:ring-blue-500/40 focus:border-transparent text-sm">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Icons Section -->
                <div class="flex items-center space-x-4">
                    <!-- Message Icon -->
                    <button
                        class="relative p-2 rounded-full bg-gray-800/40 hover:bg-gray-700/70 transition-all duration-200 hover:shadow-md hover:shadow-blue-600/10 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-300 group-hover:text-blue-400 transition-colors duration-200"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 bg-blue-500 text-xs text-white w-4 h-4 flex items-center justify-center rounded-full border border-gray-900">3</span>
                    </button>

                    <!-- Notification Icon -->
                    <button
                        class="relative p-2 rounded-full bg-gray-800/40 hover:bg-gray-700/70 transition-all duration-200 hover:shadow-md hover:shadow-yellow-600/10 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-300 group-hover:text-yellow-400 transition-colors duration-200"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 bg-yellow-500 text-xs text-white w-4 h-4 flex items-center justify-center rounded-full border border-gray-900">5</span>
                    </button>

                    <!-- Settings Icon (Added) -->
                    <button
                        class="p-2 rounded-full bg-gray-800/40 hover:bg-gray-700/70 transition-all duration-200 hover:shadow-md hover:shadow-purple-600/10 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-300 group-hover:text-purple-400 transition-colors duration-200"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Divider -->
                    <div class="h-8 w-px bg-gray-700/50"></div>

                    <!-- User Menu (Added) -->
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-1 p-1 rounded hover:bg-gray-800/60 transition-colors duration-200">
                            <div class="w-8 h-8 rounded-full overflow-hidden">
                                <img src="./images/imageTwo.jpeg" alt="User Avatar" class="w-full h-full object-cover">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div
                            class="absolute right-0 mt-2 w-48 bg-gray-900/95 backdrop-blur-md border border-gray-700/70 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-30 -translate-y-2 group-hover:translate-y-0 transform">
                            <div class="py-1">
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Profile
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Settings
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-sm text-red-400 hover:bg-gray-700/70 hover:text-red-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Main Content Area -->
        <main class="flex-1 md:ml-64 mt-8">
            <!-- Top Navigation Bar -->
            <header class="bg-slate-900/80 backdrop-blur-md border-b border-slate-800 sticky top-0 z-10">
                <div class="flex items-center justify-between px-4 py-3">
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-slate-400 hover:text-blue-400" id="mobileMenuBtn">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                </div>
            </header>

            <!-- Feed Container -->
            <div class=" p-4">
                <!-- Sorting Options -->
                <div class="flex mb-6 bg-slate-800/50 p-2 rounded-xl">
                    <button
                        class="flex-1 py-2 px-4 text-center text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg font-medium">For
                        You</button>
                    <button
                        class="flex-1 py-2 px-4 text-center text-slate-400 hover:bg-slate-700 rounded-lg font-medium transition-colors">Following</button>
                    <button
                        class="flex-1 py-2 px-4 text-center text-slate-400 hover:bg-slate-700 rounded-lg font-medium transition-colors">Trending</button>
                </div>

                <!-- Quick Post Form -->
 

                <!-- Featured Review -->
                <div class="post-card bg-slate-800 rounded-xl mb-6">
                    <div class="p-4">
                        <!-- User Info -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://via.placeholder.com/40" alt="User Avatar"
                                    class="w-10 h-10 rounded-full border-2 border-pink-500">
                                <div class="ml-3">
                                    <div class="flex items-center">
                                        <h3 class="font-semibold text-white">Emma Watson</h3>
                                        <span
                                            class="ml-2 bg-blue-500 text-xs text-white px-2 py-0.5 rounded-full">Pro</span>
                                    </div>
                                    <p class="text-xs text-slate-400">@emmawatson • 2h ago</p>
                                </div>
                            </div>
                            <div class="flex">
                                <button
                                    class="text-blue-400 hover:text-blue-300 px-3 py-1 rounded-full text-sm font-medium transition">
                                    Follow
                                </button>
                                <button class="text-slate-400 hover:text-slate-300 ml-2">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Rating Card -->
                        <div class="mt-3 p-3 bg-slate-700/50 rounded-lg">
                            <div class="flex items-center mb-2">
                                <span class="text-sm font-medium text-white">Sony WH-1000XM5 Headphones</span>
                                <div class="ml-auto flex">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star-half-alt text-yellow-400"></i>
                                </div>
                            </div>
                            <span class="text-xs px-2 py-1 bg-slate-600 rounded-full text-slate-300">#TechReview</span>
                        </div>

                        <!-- Content -->
                        <p class="mt-3 text-slate-300 leading-relaxed">
                            Just upgraded to the Sony WH-1000XM5 headphones and the noise cancellation is absolutely
                            incredible! Perfect for working in noisy environments. Battery life exceeds expectations -
                            I've been using them for 3 days straight with only one charge. The sound quality is pristine
                            with deep bass and crystal clear highs.
                        </p>

                        <!-- Image -->
                        <div class="mt-3 rounded-xl overflow-hidden">
                            <img src="/api/placeholder/600/300" alt="Sony Headphones" class="w-full object-cover">
                        </div>

                        <!-- Actions -->
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex space-x-4">
                                <button
                                    class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-green-400 transition-colors">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span class="text-sm">428</span>
                                </button>
                                <button
                                    class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-red-400 transition-colors">
                                    <i class="fas fa-thumbs-down"></i>
                                    <span class="text-sm">12</span>
                                </button>
                            </div>
                            <div class="flex space-x-4">
                                <button
                                    class="flex items-center space-x-1 text-slate-400 hover:text-blue-400 transition-colors">
                                    <i class="fas fa-comment-alt"></i>
                                    <span class="text-sm">86</span>
                                </button>
                                <button
                                    class="flex items-center space-x-1 text-slate-400 hover:text-purple-400 transition-colors">
                                    <i class="fas fa-share"></i>
                                    <span class="text-sm">32</span>
                                </button>
                                <button class="text-slate-400 hover:text-yellow-400 transition-colors">
                                    <i class="fas fa-bookmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Comments Preview -->

                </div>

                <!-- Regular Post -->
                <div class="post-card bg-slate-800 rounded-xl p-4 mb-6">
                    <!-- User Info -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/40" alt="User Avatar"
                                class="w-10 h-10 rounded-full border-2 border-green-500">
                            <div class="ml-3">
                                <h3 class="font-semibold text-white">David Chen</h3>
                                <p class="text-xs text-slate-400">@dchen • 5h ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <button
                                class="text-blue-400 hover:text-blue-300 px-3 py-1 rounded-full text-sm font-medium transition">
                                Follow
                            </button>
                            <button class="text-slate-400 hover:text-slate-300 ml-2">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Rating Card -->
                    <div class="mt-3 p-3 bg-slate-700/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <span class="text-sm font-medium text-white">The Last of Us (TV Series)</span>
                            <div class="ml-auto flex">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <span class="text-xs px-2 py-1 bg-slate-600 rounded-full text-slate-300">#TVShow</span>
                    </div>

                    <!-- Content -->
                    <p class="mt-3 text-slate-300 leading-relaxed">
                        Just finished watching The Last of Us and I'm absolutely blown away. The character development
                        is outstanding and the adaptation from the game is nearly perfect. Pedro Pascal and Bella Ramsey
                        delivered exceptional performances. Episode 3 had me in tears. Highly recommend even if you
                        haven't played the games!
                    </p>

                    <!-- Actions -->
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex space-x-4">
                            <button
                                class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-green-400 transition-colors">
                                <i class="fas fa-thumbs-up"></i>
                                <span class="text-sm">215</span>
                            </button>
                            <button
                                class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-red-400 transition-colors">
                                <i class="fas fa-thumbs-down"></i>
                                <span class="text-sm">8</span>
                            </button>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex items-center space-x-1 text-slate-400 hover:text-blue-400 transition-colors">
                                <i class="fas fa-comment-alt"></i>
                                <span class="text-sm">43</span>
                            </button>
                            <button
                                class="flex items-center space-x-1 text-slate-400 hover:text-purple-400 transition-colors">
                                <i class="fas fa-share"></i>
                                <span class="text-sm">17</span>
                            </button>
                            <button class="text-slate-400 hover:text-yellow-400 transition-colors">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Another Post -->
                <div class="post-card bg-slate-800 rounded-xl p-4 mb-6">
                    <!-- User Info -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/40" alt="User Avatar"
                                class="w-10 h-10 rounded-full border-2 border-orange-500">
                            <div class="ml-3">
                                <h3 class="font-semibold text-white">Sarah Johnson</h3>
                                <p class="text-xs text-slate-400">@sarahj • 1d ago</p>
                            </div>
                        </div>
                        <div class="flex">
                            <button
                                class="text-blue-400 hover:text-blue-300 px-3 py-1 rounded-full text-sm font-medium transition">
                                Follow
                            </button>
                            <button class="text-slate-400 hover:text-slate-300 ml-2">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Rating Card -->
                    <div class="mt-3 p-3 bg-slate-700/50 rounded-lg">
                        <div class="flex items-center mb-2">
                            <span class="text-sm font-medium text-white">Cafe Deluxe - Downtown</span>
                            <div class="ml-auto flex">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                                <i class="far fa-star text-yellow-400"></i>
                                <i class="far fa-star text-yellow-400"></i>
                            </div>
                        </div>
                        <span class="text-xs px-2 py-1 bg-slate-600 rounded-full text-slate-300">#Restaurant</span>
                    </div>

                    <!-- Content -->
                    <p class="mt-3 text-slate-300 leading-relaxed">
                        Mixed feelings about Cafe Deluxe. The ambiance was great and the staff very friendly, but the
                        food was just average for the price point. The coffee was excellent though! Probably wouldn't
                        rush back but might give it another chance if they update their menu.
                    </p>

                    <!-- Image -->
                    <div class="mt-3 grid grid-cols-2 gap-2 rounded-xl overflow-hidden">
                        <img src="/api/placeholder/300/200" alt="Cafe interior" class="w-full h-32 object-cover">
                        <img src="/api/placeholder/300/200" alt="Coffee" class="w-full h-32 object-cover">
                    </div>

                    <!-- Actions -->
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex space-x-4">
                            <button
                                class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-green-400 transition-colors">
                                <i class="fas fa-thumbs-up"></i>
                                <span class="text-sm">87</span>
                            </button>
                            <button
                                class="reaction-btn flex items-center space-x-1 text-slate-400 hover:text-red-400 transition-colors">
                                <i class="fas fa-thumbs-down"></i>
                                <span class="text-sm">14</span>
                            </button>
                        </div>
                        <div class="flex space-x-4">
                            <button
                                class="flex items-center space-x-1 text-slate-400 hover:text-blue-400 transition-colors">
                                <i class="fas fa-comment-alt"></i>
                                <span class="text-sm">23</span>
                            </button>
                            <button
                                class="flex items-center space-x-1 text-slate-400 hover:text-purple-400 transition-colors">
                                <i class="fas fa-share"></i>
                                <span class="text-sm">5</span>
                            </button>
                            <button class="text-slate-400 hover:text-yellow-400 transition-colors">
                                <i class="fas fa-bookmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Right Sidebar - Trending and Suggestions -->
  
    </div>

   <?php include('../../components/common/floatingButton.php') ?>

    <!-- Mobile Menu Sidebar -->
  

    <!-- Script for mobile menu -->
    <script>


;

    // Dropdown functionality
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('.dropdown-button');
        const menu = dropdown.querySelector('.dropdown-menu');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });

    // // Post card hover effect
    // const postCards = document.querySelectorAll('.post-card');
    // postCards.forEach(card => {
    //     card.addEventListener('mouseenter', () => {
    //         card.classList.add('transform', 'translate-y-[-3px]', 'shadow-lg');
    //     });

    //     card.addEventListener('mouseleave', () => {
    //         card.classList.remove('transform', 'translate-y-[-3px]', 'shadow-lg');
    //     });
    // });
    </script>
</body>

</html>