<?php
session_start();
if(!isset( $_SESSION['id']))
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postly - Review Anything</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/home.style.css">
    <!-- CSS for the right sidebar - Add this to your styles/home.style.css file -->
   
</head>

<body class="bg-gradient-to-b from-gray-900 to-black text-white min-h-screen">





    <?php include('../../components/common/betaBanner.php') ?>

    <?php include('../../components/common/header.php') ?>
    <!-- Horizontal Navbar -->
    <header
        class="bg-gradient-to-r from-gray-900 to-black backdrop-blur-md shadow-lg border-b border-gray-800/50 fixed top-0 left-64 right-0 z-20">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

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


            <div class="flex items-center space-x-4">

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


                <div class="h-8 w-px bg-gray-700/50"></div>


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


    <main class="container mx-auto px-4 py-16 ml-32">

        <!-- Post Feed Section -->
        <section id="feed" class="ml-32">
            <!-- Post Card -->
            <div
                class=" w-max bg-gray-800/30 mt-6  backdrop-blur-md rounded-2xl overflow-hidden   shadow-2xl  transition-all duration-500 transform  border border-gray-700/50">
                <!-- Post Header with improved layout -->
                <div class="flex items-center p-6 relative">
                    <!-- Custom animated avatar container -->
                    <div class="flex-shrink-0 relative group">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-0.5 rotating-gradient shadow-lg shadow-blue-600/20">
                            <img src="/api/placeholder/150/150" alt="User Avatar"
                                class="w-full h-full object-cover rounded-full ring-2 ring-gray-800/50">
                        </div>
                        <div
                            class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-gray-900 pulse-dot">
                        </div>

                        <!-- Hover tooltip -->
                        <div
                            class="absolute left-0 mt-2 w-64 bg-gray-900/95 backdrop-blur-md border border-gray-700/70 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-30 -translate-y-2 group-hover:translate-y-0 transform">
                            <div class="p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-0.5">
                                        <img src="/api/placeholder/150/150" alt="User Avatar"
                                            class="w-full h-full object-cover rounded-full">
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold">John Doe</h4>
                                        <p class="text-gray-400 text-xs">@johndoe</p>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-between text-xs text-gray-400 mb-3 border-b border-gray-700/50 pb-3">
                                    <div class="text-center">
                                        <div class="text-white font-semibold">248</div>
                                        <div>Posts</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-white font-semibold">14.2K</div>
                                        <div>Followers</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-white font-semibold">652</div>
                                        <div>Following</div>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-300 mb-3">Tech enthusiast, photographer and gadget reviewer.
                                    Sharing my honest thoughts about the latest tech.</p>
                                <button
                                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-1.5 rounded-lg text-sm font-medium hover:shadow-lg hover:shadow-blue-600/30 transition-all duration-300">View
                                    Profile</button>
                            </div>
                        </div>
                    </div>

                    <div class="ml-4 flex-grow">
                        <div class="flex items-center">
                            <h3
                                class="text-lg font-bold text-white hover:text-blue-400 transition-colors duration-200 cursor-pointer">
                                John Doe</h3>
                            <span
                                class="ml-2 text-xs bg-gradient-to-r from-blue-500 to-purple-600 px-2 py-0.5 rounded-full text-white shadow-sm shadow-blue-500/30">Pro</span>
                            <span
                                class="ml-2 text-xs bg-gradient-to-r from-green-500 to-emerald-600 px-2 py-0.5 rounded-full text-white shadow-sm shadow-green-500/30">Verified</span>
                        </div>
                        <p class="text-gray-400 text-xs flex items-center gap-1">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                            <span>2 hours ago</span>
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-gray-400 ml-1"></span>
                            <span>New York, USA</span>
                        </p>
                    </div>

                    <!-- Enhanced Action Buttons -->
                    <div class="flex items-center space-x-2">
                        <button
                            class="relative overflow-hidden group bg-gradient-to-r from-blue-500 to-indigo-600 text-white px-4 py-1.5 rounded-full text-sm font-medium shadow-lg shadow-blue-600/20 hover:shadow-blue-600/40 transition-all duration-300">
                            <span class="relative z-10">Follow</span>
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </button>

                        <div class="relative group">
                            <button class="p-2 hover:bg-gray-700/50 rounded-full transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>

                            <div
                                class="absolute right-0 mt-2 w-48 bg-gray-800/95 backdrop-blur-md border border-gray-700/70 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-10 transform translate-y-2 group-hover:translate-y-0">
                                <ul class="py-1">
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white rounded-t-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            Save post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Mute user
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-red-400 hover:bg-gray-700/70 hover:text-red-300 rounded-b-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Post Content -->
                <div class="px-6">
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Just tried out this amazing new gadget! It makes my life so much easier. 10/10 would recommend.
                        <span class="text-blue-400 hover:underline cursor-pointer">#TechReview</span>
                        <span class="text-blue-400 hover:underline cursor-pointer">#MustHave</span>
                        <span class="text-blue-400 hover:underline cursor-pointer">#Innovation</span>
                    </p>

                    <!-- Enhanced Post Image with Gradient Overlay -->
                    <div class="relative rounded-xl overflow-hidden mb-4 group cursor-pointer">
                        <img src="./images/imageFour.jpeg" alt="Product Image"
                            class="w-full h-96 object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">

                        <!-- Stylish gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-90">
                        </div>


                    </div>

                    <!-- Enhanced Rating System -->
                    <div
                        class="flex items-center justify-between mb-4 px-2 py-2 bg-gray-800/30 backdrop-blur-sm rounded-xl border border-gray-700/50">
                        <div class="flex items-center">
                            <span class="text-yellow-400 text-lg font-medium">4.8</span>
                            <div class="flex items-center ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Interactive rating stars -->
                        <div class="flex items-center space-x-1">
                            <div class="text-gray-400 text-sm mr-2">Rate:</div>
                            <div class="rating-stars flex">
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>

                <div
                    class=" mb-2 flex justify-between px-6 py-3 text-sm text-gray-400 bg-gradient-to-r from-gray-800/30 via-gray-800/20 to-gray-800/30 rounded-b-2xl border-t border-gray-700/30">
                    <!-- Like, Comment, Share buttons -->
                    <div class="flex items-center space-x-6">
                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-red-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-red-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="group-hover:text-red-500 transition-colors duration-200">247</span>
                        </button>

                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-blue-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-blue-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="group-hover:text-blue-500 transition-colors duration-200">42</span>
                        </button>

                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-green-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-green-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                </svg>
                            </div>
                            <span class="group-hover:text-green-500 transition-colors duration-200">Share</span>
                        </button>
                    </div>

                    <!-- Bookmark and View Count -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>3.4K views</span>
                        </div>

                        <button class="group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500 group-hover:text-blue-500 transition-colors duration-200"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>

            <div
                class="w-max bg-gray-800/30 mt-6 backdrop-blur-md rounded-2xl overflow-hidden shadow-2xl transition-all duration-500 transform border border-gray-700/50">
                <!-- Anonymous Post Header -->
                <div class="flex items-center p-6 relative">
                    <!-- Anonymized avatar container -->
                    <div class="flex-shrink-0 relative group">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-gray-500 to-gray-700 p-0.5 rotating-gradient shadow-lg shadow-gray-600/20">
                            <!-- Mask icon instead of user photo -->
                            <div class="w-full h-full flex items-center justify-center rounded-full bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <!-- Anonymous indicator -->
                        <div
                            class="absolute -bottom-1 -right-1 w-5 h-5 bg-gray-500 rounded-full border-2 border-gray-900 pulse-dot">
                        </div>

                        <!-- Hover tooltip -->
                        <div
                            class="absolute left-0 mt-2 w-64 bg-gray-900/95 backdrop-blur-md border border-gray-700/70 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-30 -translate-y-2 group-hover:translate-y-0 transform">
                            <div class="p-4">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-500 to-gray-700 p-0.5 flex items-center justify-center">
                                        <div
                                            class="w-full h-full flex items-center justify-center rounded-full bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold">Anonymous User</h4>
                                        <p class="text-gray-400 text-xs">@anonymous</p>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-between text-xs text-gray-400 mb-3 border-b border-gray-700/50 pb-3">
                                    <div class="text-center">
                                        <div class="text-white font-semibold">--</div>
                                        <div>Posts</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-white font-semibold">--</div>
                                        <div>Followers</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-white font-semibold">--</div>
                                        <div>Following</div>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-300 mb-3">This user is posting anonymously. Profile
                                    information is hidden to protect their privacy.</p>
                                <button
                                    class="w-full bg-gray-700 text-gray-300 py-1.5 rounded-lg text-sm font-medium hover:bg-gray-600 transition-all duration-300 cursor-not-allowed">Profile
                                    Hidden</button>
                            </div>
                        </div>
                    </div>

                    <div class="ml-4 flex-grow">
                        <div class="flex items-center">
                            <h3 class="text-lg font-bold text-white cursor-default">Anonymous</h3>
                            <span
                                class="ml-2 text-xs bg-gray-600 px-2 py-0.5 rounded-full text-white shadow-sm">Hidden</span>
                            <span
                                class="ml-2 text-xs bg-gradient-to-r from-purple-500 to-indigo-600 px-2 py-0.5 rounded-full text-white shadow-sm shadow-purple-500/30">Anonymous</span>
                        </div>
                        <p class="text-gray-400 text-xs flex items-center gap-1">
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                            <span>Recently</span>
                            <span class="inline-block w-1.5 h-1.5 rounded-full bg-gray-400 ml-1"></span>
                            <span>Location hidden</span>
                        </p>
                    </div>

                    <!-- Enhanced Action Buttons -->
                    <div class="flex items-center space-x-2">
                        <button
                            class="relative overflow-hidden group bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-4 py-1.5 rounded-full text-sm font-medium shadow-lg shadow-purple-600/20 hover:shadow-purple-600/40 transition-all duration-300">
                            <span class="relative z-10">Follow Anonymous</span>
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </button>

                        <div class="relative group">
                            <button class="p-2 hover:bg-gray-700/50 rounded-full transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>

                            <div
                                class="absolute right-0 mt-2 w-48 bg-gray-800/95 backdrop-blur-md border border-gray-700/70 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-10 transform translate-y-2 group-hover:translate-y-0">
                                <ul class="py-1">
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white rounded-t-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                            </svg>
                                            Save post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-700/70 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Hide anonymous posts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-red-400 hover:bg-gray-700/70 hover:text-red-300 rounded-b-xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Post Content -->
                <div class="px-6">
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Just tried out this amazing new gadget! It makes my life so much easier. 10/10 would recommend.
                        <span class="text-blue-400 hover:underline cursor-pointer">#TechReview</span>
                        <span class="text-blue-400 hover:underline cursor-pointer">#MustHave</span>
                        <span class="text-blue-400 hover:underline cursor-pointer">#Innovation</span>
                    </p>

                    <!-- Enhanced Post Image with Gradient Overlay and Anonymous Watermark -->
                    <div class="relative rounded-xl overflow-hidden mb-4 group cursor-pointer">
                        <img src="/api/placeholder/800/600" alt="Product Image"
                            class="w-full h-96 object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">

                        <!-- Stylish gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-90">
                        </div>

                        <!-- Anonymous watermark -->
                        <div class="absolute top-4 right-4 bg-black/60 backdrop-blur-md px-3 py-1 rounded-full">
                            <span class="text-white text-xs font-medium flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                Anonymous Post
                            </span>
                        </div>
                    </div>

                    <!-- Enhanced Rating System -->
                    <div
                        class="flex items-center justify-between mb-4 px-2 py-2 bg-gray-800/30 backdrop-blur-sm rounded-xl border border-gray-700/50">
                        <div class="flex items-center">
                            <span class="text-yellow-400 text-lg font-medium">4.8</span>
                            <div class="flex items-center ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Interactive rating stars -->
                        <div class="flex items-center space-x-1">
                            <div class="text-gray-400 text-sm mr-2">Rate:</div>
                            <div class="rating-stars flex">
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-yellow-400 transition-colors duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mb-2 flex justify-between px-6 py-3 text-sm text-gray-400 bg-gradient-to-r from-gray-800/30 via-gray-800/20 to-gray-800/30 rounded-b-2xl border-t border-gray-700/30">
                    <!-- Like, Comment, Share buttons -->
                    <div class="flex items-center space-x-6">
                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-red-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-red-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="group-hover:text-red-500 transition-colors duration-200">247</span>
                        </button>

                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-blue-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-blue-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="group-hover:text-blue-500 transition-colors duration-200">42</span>
                        </button>

                        <button class="flex items-center space-x-1.5 group">
                            <div
                                class="p-1.5 rounded-full bg-gray-700/30 group-hover:bg-green-500/20 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-400 group-hover:text-green-500 transition-colors duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                </svg>
                            </div>
                            <span class="group-hover:text-green-500 transition-colors duration-200">Share</span>
                        </button>
                    </div>

                    <!-- Bookmark and View Count -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-1 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>3.4K views</span>
                        </div>

                        <button class="group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-500 group-hover:text-blue-500 transition-colors duration-200"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Anonymous post badge -->
                <div
                    class="absolute top-2 right-2 px-2 py-1 bg-purple-800/60 backdrop-blur-sm rounded-lg flex items-center text-xs text-white font-medium border border-purple-700/30 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Anonymous Post</span>
                </div>

                <!-- New comments section -->
                <div class="bg-gray-800/50 border-t border-gray-700/30 pt-4 pb-2 px-6">
                    <!-- Comment input area -->
                    <div class="flex items-start space-x-3 mb-4">
                        <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <input type="text" placeholder="Add a comment..."
                                class="w-full bg-gray-700/50 border border-gray-600/30 rounded-xl px-4 py-2 text-sm text-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-transparent">
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="p-1.5 rounded-lg hover:bg-gray-700/70 transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button
                                        class="p-1.5 rounded-lg hover:bg-gray-700/70 transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <button
                                    class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white text-xs font-medium px-3 py-1 rounded-lg shadow-lg shadow-purple-500/20 hover:shadow-purple-500/40 transition-all duration-200 opacity-50 cursor-not-allowed">
                                    Comment
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Top comment -->
                    <div class="border-t border-gray-700/30 pt-4 pb-2">
                        <div class="flex items-start space-x-3 mb-1">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-0.5">
                                <div class="w-full h-full rounded-full bg-gray-800 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">JD</span>
                                </div>
                            </div>
                            <div class="flex-grow bg-gray-700/30 rounded-xl p-3">
                                <div class="flex items-center mb-1">
                                    <h4 class="text-white text-sm font-medium">John Doe</h4>
                                    <span class="ml-2 text-xs bg-blue-500/20 text-blue-400 px-2 py-0.5 rounded-full">Pro
                                        Member</span>
                                    <span class="ml-auto text-gray-400 text-xs">2h ago</span>
                                </div>
                                <p class="text-gray-300 text-sm">This looks amazing! Can you share more details about
                                    the product? Would love to know more about the features.</p>
                                <div class="flex items-center mt-2 text-xs text-gray-400">
                                    <button
                                        class="flex items-center space-x-1 hover:text-blue-400 transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                        </svg>
                                        <span>18</span>
                                    </button>
                                    <button
                                        class="flex items-center space-x-1 hover:text-red-400 transition-colors duration-200 ml-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M18 9.5a1.5 1.5 0 11-3 0v-6a1.5 1.5 0 013 0v6zM14 9.667v-5.43a2 2 0 00-1.105-1.79l-.05-.025A4 4 0 0011.055 2H5.64a2 2 0 00-1.962 1.608l-1.2 6A2 2 0 004.44 12H8v4a2 2 0 002 2 1 1 0 001-1v-.667a4 4 0 01.8-2.4l1.4-1.866a4 4 0 00.8-2.4z" />
                                        </svg>
                                        <span>3</span>
                                    </button>
                                    <button
                                        class="ml-3 hover:text-blue-400 transition-colors duration-200">Reply</button>
                                    <button
                                        class="ml-3 hover:text-yellow-400 transition-colors duration-200">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- "Load more comments" button -->
                    <div class="text-center pt-2 pb-3">
                        <button
                            class="text-sm text-gray-400 hover:text-purple-400 transition-colors duration-200 flex items-center justify-center mx-auto">
                            <span>View all 42 comments</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Follow Suggestions Section -->
        <section class=" my-12">
            <div
                class="relative bg-gradient-to-r from-gray-900 to-slate-900 rounded-3xl overflow-hidden border border-indigo-500/10 shadow-2xl backdrop-blur-md">
                <!-- Decorative background elements -->
                <div class="absolute inset-0 overflow-hidden opacity-10">
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-indigo-500 rounded-full blur-3xl">
                    </div>
                    <div class="absolute top-40 -left-20 w-80 h-80 bg-blue-500 rounded-full blur-3xl">
                    </div>
                    <div class="absolute -bottom-40 right-20 w-72 h-72 bg-purple-500 rounded-full blur-3xl">
                    </div>
                </div>

                <!-- Section Header -->
                <div class="relative border-b border-gray-800/80 p-8">
                    <h2
                        class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-blue-400 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-3 text-indigo-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        People You Might Like
                    </h2>
                </div>

                <!-- Profile Cards -->
                <div class="p-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                        <!-- Profile Card 1 -->
                        <div class="relative group">
                            <!-- Card Background -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-indigo-600/20 to-blue-600/10 rounded-2xl scale-[0.98] opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300">
                            </div>

                            <!-- Card Content -->
                            <div
                                class="relative bg-gray-900/50 backdrop-blur-sm rounded-2xl border border-gray-800 group-hover:border-indigo-500/50 overflow-hidden transition-all duration-300 shadow-lg group-hover:shadow-indigo-500/20 group-hover:translate-y-[-4px]">
                                <!-- Top color bar -->
                                <div class="h-1.5 bg-gradient-to-r from-indigo-500 to-blue-500"></div>

                                <!-- Profile Image -->
                                <div class="pt-8 pb-2 flex justify-center">
                                    <div class="relative">
                                        <div
                                            class="w-24 h-24 rounded-full border-2 border-indigo-500/20 p-1 bg-gray-900 group-hover:scale-105 transition-transform duration-300">
                                            <img src="/api/placeholder/200/200" alt="Alex Morgan"
                                                class="w-full h-full rounded-full object-cover">
                                        </div>
                                        <div
                                            class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-gray-900">
                                        </div>
                                    </div>
                                </div>

                                <!-- Profile Info -->
                                <div class="px-6 py-4 text-center">
                                    <h3
                                        class="text-lg font-bold text-white mb-1 group-hover:text-indigo-300 transition-colors">
                                        Alex Morgan</h3>
                                    <p class="text-sm text-gray-400 mb-4">UX Designer</p>

                                    <div class="flex flex-col gap-3">
                                        <button
                                            class="w-full bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-2 rounded-xl font-medium text-sm hover:from-indigo-500 hover:to-blue-500 transition-all duration-300 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                                <line x1="23" y1="11" x2="17" y2="11"></line>
                                            </svg>
                                            Follow
                                        </button>

                                        <button
                                            class="w-full bg-transparent border border-gray-700 text-gray-300 py-2 rounded-xl font-medium text-sm hover:bg-gray-800 transition-all duration-300">
                                            View Profile
                                        </button>
                                    </div>
                                </div>

                                <!-- Mutual connections -->
                                <div class="px-6 pb-6 pt-2">
                                    <div class="flex items-center justify-center">
                                        <div class="flex -space-x-2 mr-2">
                                            <img src="/api/placeholder/100/100" alt="Mutual connection"
                                                class="w-6 h-6 rounded-full border border-gray-900">
                                            <img src="/api/placeholder/100/100" alt="Mutual connection"
                                                class="w-6 h-6 rounded-full border border-gray-900">
                                            <img src="/api/placeholder/100/100" alt="Mutual connection"
                                                class="w-6 h-6 rounded-full border border-gray-900">
                                        </div>
                                        <span class="text-xs text-gray-500">3 mutual connections</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div class="relative group">
                            <!-- Card Background -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-600/20 to-pink-600/10 rounded-2xl scale-[0.98] opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300">
                            </div>

                            <!-- Card Content -->
                            <div
                                class="relative bg-gray-900/50 backdrop-blur-sm rounded-2xl border border-gray-800 group-hover:border-purple-500/50 overflow-hidden transition-all duration-300 shadow-lg group-hover:shadow-purple-500/20 group-hover:translate-y-[-4px]">
                                <!-- Top color bar -->
                                <div class="h-1.5 bg-gradient-to-r from-purple-500 to-pink-500"></div>

                                <!-- Profile Image -->
                                <div class="pt-8 pb-2 flex justify-center">
                                    <div class="relative">
                                        <div
                                            class="w-24 h-24 rounded-full border-2 border-purple-500/20 p-1 bg-gray-900 group-hover:scale-105 transition-transform duration-300">
                                            <img src="/api/placeholder/200/200" alt="Emma Wilson"
                                                class="w-full h-full rounded-full object-cover">
                                        </div>
                                        <div
                                            class="absolute bottom-1 right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-gray-900">
                                        </div>
                                    </div>
                                </div>

                                <!-- Profile Info -->
                                <div class="px-6 py-4 text-center">
                                    <h3
                                        class="text-lg font-bold text-white mb-1 group-hover:text-purple-300 transition-colors">
                                        Emma Wilson</h3>
                                    <p class="text-sm text-gray-400 mb-4">Photographer</p>

                                    <div class="flex flex-col gap-3">
                                        <button
                                            class="w-full bg-gradient-to-r from-purple-600 to-pink-600 text-white py-2 rounded-xl font-medium text-sm hover:from-purple-500 hover:to-pink-500 transition-all duration-300 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                                </path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                                <line x1="23" y1="11" x2="17" y2="11"></line>
                                            </svg>
                                            Follow
                                        </button>

                                        <button
                                            class="w-full bg-transparent border border-gray-700 text-gray-300 py-2 rounded-xl font-medium text-sm hover:bg-gray-800 transition-all duration-300">
                                            View Profile
                                        </button>
                                    </div>
                                </div>

                                <!-- Mutual connections -->
                                <div class="px-6 pb-6 pt-2">
                                    <div class="flex items-center justify-center">
                                        <div class="flex -space-x-2 mr-2">
                                            <img src="/api/placeholder/100/100" alt="Mutual connection"
                                                class="w-6 h-6 rounded-full border border-gray-900">
                                            <img src="/api/placeholder/100/100" alt="Mutual connection"
                                                class="w-6 h-6 rounded-full border border-gray-900">
                                        </div>
                                        <span class="text-xs text-gray-500">2 mutual connections</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- See More Button -->
                    <div class="text-center mt-10">
                        <button
                            class="relative bg-gradient-to-r from-gray-800 to-gray-900 text-gray-300 px-8 py-3 rounded-xl font-medium hover:text-white transition-all duration-300 overflow-hidden group border border-gray-700/50 shadow-lg">
                            <div
                                class="absolute inset-0 w-3 bg-gradient-to-r from-indigo-500 to-blue-500 transition-all duration-300 group-hover:w-full opacity-20">
                            </div>
                            <span class="relative flex items-center">
                                <span>Discover More People</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Right Sidebar - Add this after the last section in your main content area -->
        <aside class="fixed top-16 right-2 w-52 h-[calc(100vh-4rem)] hidden lg:block">

            <div
                class="mb-4 bg-gray-800/30 backdrop-blur-md rounded-xl overflow-hidden border border-gray-700/50 shadow-lg">
                <div class="px-4 py-3 border-b border-gray-700/50 bg-gradient-to-r from-gray-800/50 to-gray-900/50">
                    <h3 class="text-md font-semibold text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd" />
                        </svg>
                        Trending Topics
                    </h3>
                </div>
                <div class="p-4">
                    <ul class="space-y-3">
                        <li class="flex items-center justify-between">
                            <div>
                                <span class="text-blue-400 text-sm hover:underline cursor-pointer">#TechReview</span>
                                <p class="text-gray-400 text-xs">1.2K posts</p>
                            </div>
                            <div class="text-xs text-gray-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                        clip-rule="evenodd" />
                                </svg>
                                42%
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            <div>
                                <span class="text-blue-400 text-sm hover:underline cursor-pointer">#ProductLaunch</span>
                                <p class="text-gray-400 text-xs">985 posts</p>
                            </div>
                            <div class="text-xs text-gray-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                        clip-rule="evenodd" />
                                </svg>
                                28%
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            <div>
                                <span class="text-blue-400 text-sm hover:underline cursor-pointer">#Innovation</span>
                                <p class="text-gray-400 text-xs">753 posts</p>
                            </div>
                            <div class="text-xs text-green-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                        clip-rule="evenodd" />
                                </svg>
                                15%
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            <div>
                                <span class="text-blue-400 text-sm hover:underline cursor-pointer">#MustHave</span>
                                <p class="text-gray-400 text-xs">624 posts</p>
                            </div>
                            <div class="text-xs text-red-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1 transform rotate-180"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                        clip-rule="evenodd" />
                                </svg>
                                8%
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 pt-3 border-t border-gray-700/50">
                        <a href="#" class="text-sm text-blue-400 hover:text-blue-300 flex items-center justify-center">
                            See all trending topics
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="mb-4 bg-gray-800/30 backdrop-blur-md rounded-xl overflow-hidden border border-gray-700/50 shadow-lg">
                <div class="px-4 py-3 border-b border-gray-700/50 bg-gradient-to-r from-gray-800/50 to-gray-900/50">
                    <h3 class="text-md font-semibold text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd" />
                        </svg>
                        Recent Activity
                    </h3>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-0.5">
                                    <img src="/api/placeholder/100/100" alt="User Avatar"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                            <div class="flex-grow">
                                <p class="text-xs text-gray-300">
                                    <span class="font-semibold">Emma Wilson</span> liked your post about the new gadget
                                </p>
                                <span class="text-xs text-gray-500">15 minutes ago</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-green-500 to-emerald-600 p-0.5">
                                    <img src="/api/placeholder/100/100" alt="User Avatar"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                            <div class="flex-grow">
                                <p class="text-xs text-gray-300">
                                    <span class="font-semibold">Mike Johnson</span> commented on your review
                                </p>
                                <span class="text-xs text-gray-500">1 hour ago</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mr-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-yellow-500 to-amber-600 p-0.5">
                                    <img src="/api/placeholder/100/100" alt="User Avatar"
                                        class="w-full h-full object-cover rounded-full">
                                </div>
                            </div>
                            <div class="flex-grow">
                                <p class="text-xs text-gray-300">
                                    <span class="font-semibold">Sarah Smith</span> started following you
                                </p>
                                <span class="text-xs text-gray-500">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-t border-gray-700/50">
                        <a href="#"
                            class="text-sm text-purple-400 hover:text-purple-300 flex items-center justify-center">
                            View all notifications
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>


            <div
                class="mb-4 bg-gray-800/30 backdrop-blur-md rounded-xl overflow-hidden border border-gray-700/50 shadow-lg">
                <div class="px-4 py-3 border-b border-gray-700/50 bg-gradient-to-r from-gray-800/50 to-gray-900/50">
                    <h3 class="text-md font-semibold text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                        Upcoming Events
                    </h3>
                </div>
                <div class="p-4">
                    <div class="space-y-3">
                        <div
                            class="relative bg-gradient-to-r from-gray-900/60 to-gray-800/60 rounded-lg border border-gray-700/50 p-3 group hover:border-amber-500/50 transition-all duration-300 cursor-pointer">
                            <div
                                class="absolute top-0 right-0 bg-amber-500/10 text-amber-500 rounded-bl-lg rounded-tr-lg px-2 py-1 text-xs font-medium">
                                Virtual
                            </div>
                            <h4
                                class="text-white text-sm font-medium mb-1 group-hover:text-amber-400 transition-colors">
                                Tech Meetup 2025</h4>
                            <div class="flex items-center text-xs text-gray-400 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Monday, Apr 28 • 4:00 PM
                            </div>
                            <div class="flex -space-x-2">
                                <img src="/api/placeholder/100/100" alt="Attendee"
                                    class="w-5 h-5 rounded-full border border-gray-800">
                                <img src="/api/placeholder/100/100" alt="Attendee"
                                    class="w-5 h-5 rounded-full border border-gray-800">
                                <img src="/api/placeholder/100/100" alt="Attendee"
                                    class="w-5 h-5 rounded-full border border-gray-800">
                                <div
                                    class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-800 text-gray-400 text-xs border border-gray-700">
                                    +8
                                </div>
                            </div>
                        </div>

                        <div
                            class="relative bg-gradient-to-r from-gray-900/60 to-gray-800/60 rounded-lg border border-gray-700/50 p-3 group hover:border-amber-500/50 transition-all duration-300 cursor-pointer">
                            <div
                                class="absolute top-0 right-0 bg-green-500/10 text-green-500 rounded-bl-lg rounded-tr-lg px-2 py-1 text-xs font-medium">
                                In Person
                            </div>
                            <h4
                                class="text-white text-sm font-medium mb-1 group-hover:text-amber-400 transition-colors">
                                Product Review Workshop</h4>
                            <div class="flex items-center text-xs text-gray-400 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Friday, May 2 • 6:30 PM
                            </div>
                            <div class="flex -space-x-2">
                                <img src="/api/placeholder/100/100" alt="Attendee"
                                    class="w-5 h-5 rounded-full border border-gray-800">
                                <img src="/api/placeholder/100/100" alt="Attendee"
                                    class="w-5 h-5 rounded-full border border-gray-800">
                                <div
                                    class="flex items-center justify-center w-5 h-5 rounded-full bg-gray-800 text-gray-400 text-xs border border-gray-700">
                                    +5
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 pt-3 border-t border-gray-700/50">
                        <a href="#"
                            class="text-sm text-amber-400 hover:text-amber-300 flex items-center justify-center">
                            Browse all events
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>


            <div class="bg-gray-800/30 backdrop-blur-md rounded-xl overflow-hidden border border-gray-700/50 shadow-lg">
                <div class="px-4 py-3 border-b border-gray-700/50 bg-gradient-to-r from-gray-800/50 to-gray-900/50">
                    <h3 class="text-md font-semibold text-white flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                        Popular Categories
                    </h3>
                </div>
                <div class="p-4">
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-blue-900/30 to-blue-800/30 text-blue-300 text-xs rounded-full border border-blue-700/30 hover:border-blue-500/50 transition-all duration-300">
                            Tech Reviews
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-purple-900/30 to-purple-800/30 text-purple-300 text-xs rounded-full border border-purple-700/30 hover:border-purple-500/50 transition-all duration-300">
                            Gadgets
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-green-900/30 to-green-800/30 text-green-300 text-xs rounded-full border border-green-700/30 hover:border-green-500/50 transition-all duration-300">
                            Lifestyle
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-red-900/30 to-red-800/30 text-red-300 text-xs rounded-full border border-red-700/30 hover:border-red-500/50 transition-all duration-300">
                            Photography
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-amber-900/30 to-amber-800/30 text-amber-300 text-xs rounded-full border border-amber-700/30 hover:border-amber-500/50 transition-all duration-300">
                            Food
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-pink-900/30 to-pink-800/30 text-pink-300 text-xs rounded-full border border-pink-700/30 hover:border-pink-500/50 transition-all duration-300">
                            Travel
                        </a>
                        <a href="#"
                            class="px-3 py-1.5 bg-gradient-to-r from-indigo-900/30 to-indigo-800/30 text-indigo-300 text-xs rounded-full border border-indigo-700/30 hover:border-indigo-500/50 transition-all duration-300">
                            Gaming
                        </a>
                    </div>
                    <div class="mt-3 pt-3 border-t border-gray-700/50">
                        <a href="#" class="text-sm text-teal-400 hover:text-teal-300 flex items-center justify-center">
                            View all categories
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </aside>


    </main>

<?php include('../../components/common/floatingButton.php') ?>

    <script src='../../scripts/js/home.script.js'>

    </script>
</body>

</html>