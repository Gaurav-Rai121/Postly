<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Social Media</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-[#121212] text-gray-200">
   <?php include('../../components/common/header.php') ?>
   <?php include('../../components/common/headerTwo.php') ?>
   
   <!-- Main Content -->
    <main class="mx-auto px-4 py-16 ml-64 mt-4">
        <!-- Glass-morphism card container with curved edges -->
        <div
            class="relative backdrop-blur-lg bg-white/30 dark:bg-black/30 rounded-3xl shadow-2xl overflow-hidden border border-white/20 dark:border-gray-700/30">

            <!-- Decorative background blobs -->
            <div
                class="absolute -top-24 -right-24 w-64 h-64 bg-purple-500/30 dark:bg-purple-600/20 rounded-full blur-3xl">
            </div>
            <div
                class="absolute -bottom-24 -left-24 w-64 h-64 bg-blue-500/20 dark:bg-blue-600/20 rounded-full blur-3xl">
            </div>

            <!-- Top navigation bar -->
 

            <!-- Main content area -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 p-6">
                <!-- Left column - Profile info -->
                <div
                    class="lg:col-span-4 flex flex-col items-center lg:items-start lg:border-r lg:border-gray-100 dark:lg:border-gray-700/30 lg:pr-8">
                    <!-- Profile header with badge -->
                    <div class="relative">
                        <!-- Rotating light effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 rounded-full animate-spin opacity-20"
                            style="animation-duration: 8s;"></div>

                        <!-- Stacked image frames -->
                        <div class="relative z-10 flex items-center justify-center">
                            <!-- Outer frame -->
                            <div
                                class="absolute w-40 h-40 bg-gradient-to-br from-pink-600 to-purple-600 rounded-xl rotate-45">
                            </div>
                            <!-- Inner frame -->
                            <div
                                class="absolute w-36 h-36 bg-gradient-to-br from-indigo-500 to-cyan-500 rounded-xl rotate-12">
                            </div>
                            <!-- Profile picture -->
                            <img src="../../assets/images/imageFour.jpeg" alt="User Avatar"
                                class="relative w-32 h-32 object-cover rounded-lg shadow-xl z-10">

                            <!-- Pro badge with 3D effect -->
                            <div
                                class="absolute -bottom-4 -right-4 bg-gradient-to-r from-amber-400 to-orange-500 text-white px-4 py-1 rounded-full text-xs font-bold shadow-lg border-2 border-white dark:border-gray-800 flex items-center gap-1 z-20 transform hover:scale-105 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                                PRO
                            </div>
                        </div>
                    </div>

                    <!-- User info -->
                    <div class="mt-8 text-center lg:text-left w-full">
                        <h1
                            class="text-3xl font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
                            John Doe</h1>
                        <p class="text-gray-500 dark:text-gray-400">@johndoe</p>

                        <!-- Status indicator -->
                        <div
                            class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                            <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                            Online
                        </div>

                        <!-- User bio with emoji -->
                        <p class="mt-4 text-gray-600 dark:text-gray-300 text-sm">
                            Creative developer and design enthusiast. Building the future one pixel at a time. ✨
                        </p>

                        <!-- Interest tags with hover effect -->
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100 rounded-md text-xs transform hover:-translate-y-1 transition-transform cursor-pointer flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Tech
                            </span>
                            <span
                                class="px-3 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100 rounded-md text-xs transform hover:-translate-y-1 transition-transform cursor-pointer flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                                </svg>
                                Food
                            </span>
                            <span
                                class="px-3 py-1 bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100 rounded-md text-xs transform hover:-translate-y-1 transition-transform cursor-pointer flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Travel
                            </span>
                            <span
                                class="px-3 py-1 bg-purple-100 text-purple-800 dark:bg-purple-800 dark:text-purple-100 rounded-md text-xs transform hover:-translate-y-1 transition-transform cursor-pointer flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                </svg>
                                Music
                            </span>
                        </div>

                        <!-- Location with map pin -->
                        <div class="mt-6 flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            San Francisco, CA
                        </div>

                        <!-- Member since info -->
                        <div class="mt-2 flex items-center text-gray-500 dark:text-gray-400 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Member since Apr 2022
                        </div>
                    </div>
                </div>

                <!-- Right column - Stats and activity -->
                <div class="lg:col-span-8">
                    <!-- Greeting card with wave animation -->
                    <div
                        class="bg-gradient-to-r from-blue-500 to-purple-600 p-6 rounded-2xl text-white mb-8 overflow-hidden relative">
                        <!-- Wave animation -->
                        <div class="absolute bottom-0 left-0 right-0 h-16">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                                class="w-full h-full absolute bottom-0">
                                <path fill="rgba(255,255,255,0.1)" fill-opacity="1"
                                    d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                                </path>
                            </svg>
                        </div>

                        <div class="relative z-10">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-2xl font-bold mb-1">Welcome back, John!</h2>
                                    <p class="text-blue-100">Here's what's happening with your account today.</p>
                                </div>
                                <div class="bg-white/20 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Daily streak indicator -->
                            <div class="mt-4 inline-flex items-center bg-white/10 px-3 py-1 rounded-full text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                                🔥 7 day streak! Keep it up!
                            </div>
                        </div>
                    </div>

                    <!-- Analytics cards with interactive elements -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <!-- Posts card with flip effect -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-4 relative overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                            <!-- Card top pattern -->
                            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-600">
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Posts</p>
                                    <div class="flex items-baseline mt-1">
                                        <p class="text-2xl font-bold text-gray-900 dark:text-white">120</p>
                                        <span class="ml-2 text-xs text-green-500 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            +12%
                                        </span>
                                    </div>
                                </div>

                                <div
                                    class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 group-hover:rotate-12 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Mini graph -->
                            <div class="mt-4 h-10 flex items-end space-x-1">
                                <div class="bg-blue-100 dark:bg-blue-800 w-1 rounded-t h-3"></div>
                                <div class="bg-blue-200 dark:bg-blue-700 w-1 rounded-t h-4"></div>
                                <div class="bg-blue-300 dark:bg-blue-600 w-1 rounded-t h-7"></div>
                                <div class="bg-blue-400 dark:bg-blue-500 w-1 rounded-t h-5"></div>
                                <div class="bg-blue-500 dark:bg-blue-400 w-1 rounded-t h-8"></div>
                                <div class="bg-blue-600 dark:bg-blue-300 w-1 rounded-t h-9"></div>
                                <div class="bg-blue-700 dark:bg-blue-200 w-1 rounded-t h-6"></div>
                                <div class="bg-blue-800 dark:bg-blue-100 w-1 rounded-t h-10"></div>
                            </div>
                        </div>

                        <!-- Tweets card with pulse effect -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-4 relative overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                            <!-- Card top pattern -->
                            <div
                                class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-400 to-cyan-600">
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Tweets</p>
                                    <div class="flex items-baseline mt-1">
                                        <p class="text-2xl font-bold text-gray-900 dark:text-white">87</p>
                                        <span class="ml-2 text-xs text-green-500 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            +8%
                                        </span>
                                    </div>
                                </div>

                                <div
                                    class="w-10 h-10 rounded-full bg-cyan-100 dark:bg-cyan-900 flex items-center justify-center text-cyan-600 dark:text-cyan-300 group-hover:rotate-12 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Animated pulse -->
                            <div class="mt-4 h-10 flex items-center justify-center">
                                <span class="relative flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-cyan-500"></span>
                                </span>
                                <div
                                    class="h-px bg-gradient-to-r from-transparent via-cyan-500 to-transparent w-full ml-1">
                                </div>
                            </div>
                        </div>

                        <!-- Following card with radial progress -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-4 relative overflow-hidden group hover:shadow-xl transition-all cursor-pointer">
                            <!-- Card top pattern -->
                            <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-purple-600">
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Following</p>
                                    <div class="flex items-baseline mt-1">
                                        <p class="text-2xl font-bold text-gray-900 dark:text-white">438</p>
                                        <span class="ml-2 text-xs text-green-500 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            +6%
                                        </span>
                                    </div>
                                </div>

                                <div
                                    class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center text-purple-600 dark:text-purple-300 group-hover:rotate-12 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Circular progress -->
                            <div class="mt-4 h-10 flex items-center justify-center">
                                <svg class="w-10 h-10" viewBox="0 0 36 36">
                                    <circle cx="18" cy="18" r="16" fill="none"
                                        class="stroke-current text-gray-200 dark:text-gray-700" stroke-width="2">
                                    </circle>
                                    <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-purple-500"
                                        stroke-width="2" stroke-dasharray="100" stroke-dashoffset="65"
                                        transform="rotate(-90 18 18)"></circle>
                                    <text x="18" y="20" font-family="sans-serif" font-size="8px" text-anchor="middle"
                                        fill="currentColor" class="text-gray-700 dark:text-gray-300">35%</text>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs for content switching -->
                    <div class="mb-6">
                        <div class="flex border-b border-gray-200 dark:border-gray-700">
                            <button id="postsTab" class="px-6 py-3 text-sm font-medium text-blue-600 border-b-2 border-blue-500 dark:text-blue-400 dark:border-blue-400 dark:border-blue-400 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Posts
                            </button>
                            <button class="px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Photos
                            </button>
                            <button class="px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                Videos
                            </button>
                            <button class="px-6 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                About
                            </button>
                        </div>
                    </div>

                    <!-- Post feed with animations -->
                    <div class="space-y-6">
                        <!-- Post 1 with hover effects -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden group hover:shadow-xl transition-all">
                            <!-- Post header -->
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="../../assets/images/imageFour.jpeg" alt="User Avatar" class="h-10 w-10 rounded-full">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">John Doe</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="mt-3 text-gray-700 dark:text-gray-300">Just launched my new portfolio website! Check it out and let me know what you think. Really proud of the design system I created for this project.</p>

                                <!-- Post hashtags -->
                                <div class="mt-3">
                                    <a href="#" class="text-blue-600 dark:text-blue-400 text-sm mr-2">#webdesign</a>
                                    <a href="#" class="text-blue-600 dark:text-blue-400 text-sm">#portfolio</a>
                                </div>
                            </div>

                            <!-- Post image -->
                            <div class="relative">
                                <img src="/api/placeholder/800/400" alt="Post image" class="w-full h-64 object-cover object-center">
                                <!-- Overlay with gradient on hover -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-between p-4">
                                    <span class="text-white text-sm font-medium">View full image</span>
                                    <span class="text-white bg-black/30 px-2 py-1 rounded text-xs">1200 × 675</span>
                                </div>
                            </div>

                            <!-- Post stats and actions -->
                            <div class="px-5 py-3 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between items-center">
                                    <!-- Left stats -->
                                    <div class="flex space-x-4">
                                        <div class="flex items-center space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                            <button class="flex items-center space-x-1 focus:outline-none group">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 group-hover:scale-110 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                                </svg>
                                                <span>128</span>
                                            </button>
                                        </div>
                                        <div class="flex items-center space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                            <span>46</span>
                                        </div>
                                        <div class="flex items-center space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                            </svg>
                                            <span>24</span>
                                        </div>
                                    </div>

                                    <!-- Right bookmark button -->
                                    <button class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Post 2 with skeleton loading -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 bg-gray-200 dark:bg-gray-700 rounded-full animate-pulse"></div>
                                    </div>
                                    <div class="ml-3">
                                        <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-24 mb-2 animate-pulse"></div>
                                        <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-16 animate-pulse"></div>
                                    </div>
                                </div>
                                <div class="mt-4 space-y-2">
                                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-full animate-pulse"></div>
                                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-5/6 animate-pulse"></div>
                                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-4/6 animate-pulse"></div>
                                </div>
                            </div>
                            <div class="h-48 bg-gray-200 dark:bg-gray-700 w-full animate-pulse"></div>
                            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between">
                                    <div class="flex space-x-4">
                                        <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-12 animate-pulse"></div>
                                        <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-12 animate-pulse"></div>
                                    </div>
                                    <div class="h-5 bg-gray-200 dark:bg-gray-700 rounded w-5 animate-pulse"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Load more button with pulse effect -->
                        <div class="flex justify-center">
                            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span>Load more</span>
                                <span class="flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-white opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom navigation for mobile -->
            <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 px-6 py-2">
                <div class="flex justify-between">
                    <button class="p-2 text-blue-600 rounded-full bg-blue-100 dark:bg-blue-900 dark:text-blue-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-500 dark:text-gray-400 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button class="p-2 text-gray-500 dark:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        // You could add JavaScript here for interactive features
        document.addEventListener('DOMContentLoaded', function() {
            // Example interaction - toggle notification panel
            const notificationBtn = document.querySelector('svg[stroke="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"]');
            if (notificationBtn) {
                notificationBtn.addEventListener('click', function() {
                    alert('Notification panel would open here');
                });
            }
        });
    </script>
</body>

</html>