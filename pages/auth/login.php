<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect - Login</title>
    <link rel="icon" type="image/png" href="./newlogo2.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../scripts/css/login.style.css">

</head>

<body class="antialiased">
    <!-- Gradient Background -->
    <div class="fixed inset-0 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 opacity-50"></div>

    <!-- Background Pattern -->
    <div class="fixed inset-0 bg-pattern opacity-5"></div>

    <!-- Main Container -->
    <div class="min-h-screen relative flex flex-col md:flex-row items-stretch">

        <!-- Left Side - Branding/Imagery -->
        <div
            class="bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-700 hidden md:flex md:w-1/2 bg-cover bg-center relative overflow-hidden">
            <!-- Abstract shaped divider -->
            <div class="absolute top-0 bottom-0 right-0 w-24 bg-white transform skew-x-6"></div>

            <!-- Content Container -->
            <div class="absolute inset-0 flex flex-col justify-center px-16 z-10">
                <!-- Branding -->
                <div class="mb-10">
                    <div class="flex items-center">
                        <div
                            class="w-14 h-14 rounded-xl  flex items-center justify-center shadow-lg transform rotate-12">
                            <img src="./newlogo2.png" alt="">
                        </div>
                        <h1 class="text-5xl font-extrabold ml-4 text-white tracking-tight">Postly</h1>
                    </div>
                    <p class="text-white/90 mt-3 text-xl font-light">Share moments. Build meaningful connections.</p>
                </div>

                <!-- Features Showcase -->
                <div class="space-y-6">
                    <div
                        class="flex items-center glass p-4 rounded-xl transition-all duration-300 hover:bg-white/20 cursor-pointer">
                        <div
                            class="w-12 h-12 rounded-lg bg-gradient-to-tr from-blue-500 to-cyan-400 flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-white font-semibold text-lg">Global Community</h3>
                            <p class="text-white/80 text-sm">Connect with friends and discover communities worldwide</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center glass p-4 rounded-xl transition-all duration-300 hover:bg-white/20 cursor-pointer">
                        <div
                            class="w-12 h-12 rounded-lg bg-gradient-to-tr from-purple-500 to-pink-400 flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-white font-semibold text-lg">Real-time Updates</h3>
                            <p class="text-white/80 text-sm">Stay updated with instant notifications and live feeds</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center glass p-4 rounded-xl transition-all duration-300 hover:bg-white/20 cursor-pointer">
                        <div
                            class="w-12 h-12 rounded-lg bg-gradient-to-tr from-pink-500 to-orange-400 flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-5">
                            <h3 class="text-white font-semibold text-lg">Rich Media Sharing</h3>
                            <p class="text-white/80 text-sm">Share photos, videos, and stories in stunning quality</p>
                        </div>
                    </div>
                </div>

                <!-- Social Proof -->
                <div class="mt-12">
                    <p class="text-white/80 mb-3">Join millions of users worldwide</p>
                    <div class="flex -space-x-2">
                        <img src="./images/download.jpeg" alt="User" class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="./images/imageFour.jpeg" alt="User"
                            class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="./images/imageOne.jpeg" alt="User" class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="./images/imageThree.jpeg" alt="User"
                            class="w-8 h-8 rounded-full border-2 border-white">
                        <img src="./images/imageTwo.jpeg" alt="User" class="w-8 h-8 rounded-full border-2 border-white">
                        <div
                            class="w-8 h-8 rounded-full bg-white/20 border-2 border-white flex items-center justify-center">
                            <span class="text-white text-xs">+5M</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Background shapes -->
            <div
                class="absolute top-32 left-20 w-36 h-36 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-64 right-32 w-48 h-48 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute bottom-32 left-48 w-40 h-40 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000">
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="flex-1 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="md:hidden mb-8 text-center">
                    <div class="inline-flex items-center justify-center">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-tr from-blue-500 to-purple-600 flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-bold ml-3 text-gray-800">Connect</h1>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome back!</h2>
                    <p class="text-gray-600">Login to connect with your friends and communities</p>
                </div>

                 <?php  
                 
                 $error=isset($_GET['error'])?urldecode($_GET['error']):'';

                 
                 
                 if($error){
                     echo'<div class=" error-notification">
                    <div class="error-card">
                        <div class="error-icon-container">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C16.418 20 20 16.418 20 12C20 7.582 16.418 4 12 4C7.582 4 4 7.582 4 12C4 16.418 7.582 20 12 20ZM11 15H13V17H11V15ZM11 7H13V13H11V7Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="error-content">
                            <h4>Authentication Failed</h4>
                            <p>'.$error.'</p>
                        </div>
                    </div>
                </div>';
                 }
                 
                 ?>


                <form action="../../handlers/login/handlelogin.php" method="POST" class="space-y-6">
                    <!-- Username/Email Field -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username or
                            Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <input type="text" id="username" name="username" required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:ring-opacity-50 focus:border-blue-500 focus:outline-none text-gray-900 bg-white"
                                placeholder="Enter your username or email">
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800 hover:underline">Forgot
                                password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input type="password" id="password" name="password" required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:ring-opacity-50 focus:border-blue-500 focus:outline-none text-gray-900 bg-white"
                                placeholder="Enter your password">
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Keep me signed in</label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit"
                        class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-white bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-700 hover:from-indigo-900 via-purple-800 to-pink-700 hover:to-purple-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 font-medium">
                        <span>Log in to Connect</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>

                    <!-- Social Login Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <!-- Social Login Buttons -->
                    <div class="grid grid-cols-1 gap-3">
                        <button type="button" id="google-login-button"
                            class="py-2.5 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 flex justify-center items-center">
                            <i
                                class="fab fa-google text-lg text-gradient-to-br from-indigo-900 via-purple-800 to-pink-700"></i>
                        </button>




                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-8">
                    <p class="text-gray-600">
                        Don't have an account yet?
                        <a href="signup.php" class="text-blue-600 hover:text-blue-800 hover:underline font-medium">Sign
                            up</a>
                    </p>
                </div>

                <!-- App Download Links -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <p class="text-gray-600 text-center text-sm mb-4">Get our mobile app</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" id="app-store-button"
                            class="flex items-center justify-center px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                            <i class="fab fa-apple text-lg mr-2"></i>
                            <span class="text-xs font-medium">App Store</span>
                        </a>
                        <a href="#" id="play-store-button"
                            class="flex items-center justify-center px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                            <i class="fab fa-google-play text-lg mr-2"></i>
                            <span class="text-xs font-medium">Google Play</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script to handle PHP error GET parameter -->
    <script src='../../scripts/js/login.script.js'></script>

</body>

</html>