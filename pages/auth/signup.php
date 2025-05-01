<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Connectify - The Next Social Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="./newlogo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../scripts/css/signup.style.css">
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen">
    <!-- Background Elements -->
    <div class="fixed top-0 left-0 right-0 bottom-0 overflow-hidden z-0">
        <div class="circle-bg bg-purple-100 w-96 h-96 -top-20 -left-20 opacity-70"></div>
        <div class="circle-bg bg-blue-100 w-64 h-64 top-1/4 right-10 opacity-60"></div>
        <div class="circle-bg bg-pink-100 w-80 h-80 bottom-0 left-1/3 opacity-60"></div>
        <div class="circle-bg bg-indigo-100 w-72 h-72 bottom-10 right-0 opacity-70"></div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 min-h-screen flex flex-col items-center justify-center px-4 py-12">
        <!-- Navigation -->
        <nav class="absolute top-0 left-0 right-0 flex justify-between items-center p-4 md:p-6">
            <div class="flex items-center space-x-2">
                <div class="h-10 w-10 rounded-full  flex items-center justify-center">
                   <img src="../../assets/logo/newlogo2.png" alt="">
                </div>
                <span class="font-bold text-xl text-gradient">Postly</span>
            </div>
            <a href="login.php"
                class="py-2 px-4 text-sm font-medium text-indigo-600 hover:text-indigo-800 border border-indigo-600 rounded-full hover:bg-indigo-50 transition-all duration-300">Log
                In</a>
        </nav>

        <!-- Signup Card -->
        <div class="w-full max-w-5xl glassmorphism rounded-3xl custom-shadow border border-white overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Left Side - Hero Section -->
                <div class="w-full md:w-5/12 bg-gradient-custom p-8 md:p-12 text-white relative overflow-hidden">
                    <div class="absolute -bottom-16 -right-16 w-64 h-64 bg-white bg-opacity-10 rounded-full"></div>
                    <div class="absolute top-20 -left-20 w-40 h-40 bg-white bg-opacity-10 rounded-full"></div>

                    <div class="relative z-10">
                        <h1 class="text-4xl font-bold mb-6">Join the next generation social experience</h1>
                        <p class="text-white text-opacity-90 mb-8">Connect, share, and discover in a whole new way with
                            our vibrant community of creators and thinkers.</p>

                        <!-- Features -->
                        <div class="space-y-4 mt-8">
                            <div class="flex items-start space-x-3">
                                <div class="rounded-full bg-white bg-opacity-20 p-2 mt-1">
                                    <i class="fas fa-user-friends text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Find your community</h3>
                                    <p class="text-sm text-white text-opacity-80">Connect with like-minded people around
                                        shared interests</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="rounded-full bg-white bg-opacity-20 p-2 mt-1">
                                    <i class="fas fa-shield-alt text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Privacy first</h3>
                                    <p class="text-sm text-white text-opacity-80">You control what you share and who
                                        sees it</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="rounded-full bg-white bg-opacity-20 p-2 mt-1">
                                    <i class="fas fa-bolt text-sm"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Personalized experience</h3>
                                    <p class="text-sm text-white text-opacity-80">Content tailored to your interests and
                                        preferences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Images (Decorative) -->
                        <div class="hidden lg:block absolute -right-20 top-1/3 animate-float">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-xl rotate-12"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Form -->
                <div class="w-full md:w-7/12 p-8 md:p-12">
                    <div class="max-w-lg mx-auto">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-gray-800">Create your account</h2>
                            <p class="text-gray-500 mt-2">Join thousands of creators and innovators</p>
                        </div>

                        <!-- Error Display -->
                        <?php 
            $error = isset($_GET['error']) ? urldecode($_GET['error']) : '';
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

                        <!-- Signup Form -->
                        <form action="../../handlers/signup/handlesignup.php" method="POST" class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- Full Name -->
                                <div class="relative group">
                                    <label for="name"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Full
                                        Name</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-user text-sm"></i>
                                        </span>
                                        <input type="text" id="name" name="name" placeholder="Your name"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Username -->
                                <div class="relative group">
                                    <label for="username"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Username</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-at text-sm"></i>
                                        </span>
                                        <input type="text" id="username" name="username" placeholder="Choose username"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="relative group">
                                    <label for="email"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Email</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-envelope text-sm"></i>
                                        </span>
                                        <input type="email" id="email" name="email" placeholder="your@email.com"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Phone Number -->
                                <div class="relative group">
                                    <label for="phone"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Phone</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-phone text-sm"></i>
                                        </span>
                                        <input type="tel" id="phone" name="phone" placeholder="Your phone number"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="relative group">
                                    <label for="password"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Password</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-lock text-sm"></i>
                                        </span>
                                        <span
                                            class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer toggle-password">
                                            <i class="fas fa-eye-slash text-gray-400 hover:text-gray-600 text-sm"></i>
                                        </span>
                                        <input type="password" id="password" name="password"
                                            placeholder="Create password"
                                            class="w-full pl-10 pr-10 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                    <div class="mt-1 hidden password-strength">
                                        <div class="w-full h-1 flex space-x-1">
                                            <div class="w-1/4 h-full bg-gray-200 rounded-full"></div>
                                            <div class="w-1/4 h-full bg-gray-200 rounded-full"></div>
                                            <div class="w-1/4 h-full bg-gray-200 rounded-full"></div>
                                            <div class="w-1/4 h-full bg-gray-200 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="relative group">
                                    <label for="confirm-password"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Confirm
                                        Password</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-lock text-sm"></i>
                                        </span>
                                        <input type="password" id="confirm-password" name="confirm_password"
                                            placeholder="Confirm password"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Date of Birth -->
                                <div class="relative group">
                                    <label for="dob"
                                        class="block text-xs font-medium text-gray-500 mb-1 ml-1 transition-all duration-200 group-focus-within:text-indigo-600">Date
                                        of Birth</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-indigo-500">
                                            <i class="fas fa-calendar text-sm"></i>
                                        </span>
                                        <input type="date" id="dob" name="dob"
                                            class="w-full pl-10 pr-3 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:border-indigo-500 focus:ring-0 focus:outline-none input-focus transition-all duration-200"
                                            required>
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="relative">
                                    <label class="block text-xs font-medium text-gray-500 mb-1 ml-1">Gender</label>
                                    <div
                                        class="bg-gray-50 border border-gray-200 rounded-xl p-3 flex items-center justify-between">
                                        <label
                                            class="flex items-center cursor-pointer rounded-lg py-1 px-3 hover:bg-gray-100 transition-colors duration-200">
                                            <input type="radio" name="gender" value="male" class="sr-only" required>
                                            <div
                                                class="w-4 h-4 border border-gray-300 rounded-full mr-2 flex items-center justify-center group-checked:bg-indigo-500 radio-button">
                                                <div class="radio-dot hidden w-2 h-2 bg-indigo-500 rounded-full"></div>
                                            </div>
                                            <span class="text-sm">Male</span>
                                        </label>
                                        <label
                                            class="flex items-center cursor-pointer rounded-lg py-1 px-3 hover:bg-gray-100 transition-colors duration-200">
                                            <input type="radio" name="gender" value="female" class="sr-only">
                                            <div
                                                class="w-4 h-4 border border-gray-300 rounded-full mr-2 flex items-center justify-center radio-button">
                                                <div class="radio-dot hidden w-2 h-2 bg-indigo-500 rounded-full"></div>
                                            </div>
                                            <span class="text-sm">Female</span>
                                        </label>
                                        <label
                                            class="flex items-center cursor-pointer rounded-lg py-1 px-3 hover:bg-gray-100 transition-colors duration-200">
                                            <input type="radio" name="gender" value="other" class="sr-only">
                                            <div
                                                class="w-4 h-4 border border-gray-300 rounded-full mr-2 flex items-center justify-center radio-button">
                                                <div class="radio-dot hidden w-2 h-2 bg-indigo-500 rounded-full"></div>
                                            </div>
                                            <span class="text-sm">Other</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Privacy -->
                            <div class="mt-4">
                                <label class="flex items-start cursor-pointer group">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" id="terms" name="terms" class="sr-only" required>
                                        <div
                                            class="w-5 h-5 border border-gray-300 rounded group-hover:border-indigo-500 flex items-center justify-center checkbox-box">
                                            <i class="fas fa-check text-white text-xs opacity-0 checkbox-icon"></i>
                                        </div>
                                    </div>
                                    <span class="ml-3 text-sm text-gray-600">
                                        I agree to the <a href="#"
                                            class="text-indigo-600 hover:text-indigo-800 font-medium">Terms of
                                            Service</a> and <a href="#"
                                            class="text-indigo-600 hover:text-indigo-800 font-medium">Privacy Policy</a>
                                    </span>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-8">
                                <button type="submit"
                                    class="w-full bg-gradient-custom text-white py-3 px-6 rounded-xl font-medium focus:outline-none hover:opacity-90 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    <span>Create Your Account</span>
                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </button>
                            </div>
                        </form>

                        <!-- Social Login Options -->
                        <div class="mt-8">
                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-200"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-4 bg-white text-gray-500">or continue with</span>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-1 gap-3">
                                <button type="button" id="google-login-button"
                                    class="flex justify-center items-center py-3 px-4 border border-gray-200 rounded-xl shadow-sm bg-white hover:bg-gray-50 transition-all duration-200">
                                    <i class="fab fa-google text-red-500"></i>
                                </button>

                            </div>
                        </div>

                        <!-- Footer -->
                        <p class="text-center text-gray-500 text-sm mt-8">
                            Already have an account? <a href="login.php"
                                class="text-indigo-600 font-medium hover:text-indigo-800">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="mt-10 flex flex-wrap justify-center gap-x-6 gap-y-2 text-sm text-gray-500">
            <a href="../../pages/footer/about.php" class="hover:text-gray-800 transition-colors">About</a>
            <a href="../../pages/footer/privacy.php" class="hover:text-gray-800 transition-colors">Privacy</a>
            <a href="../../pages/footer/term.php" class="hover:text-gray-800 transition-colors">Terms</a>
            <a href="./helpCenter.php" class="hover:text-gray-800 transition-colors">Help Center</a>
            <a href="#" class="hover:text-gray-800 transition-colors">Contact</a>
            <span>© 2025 Connectify</span>
        </div>
    </div>

    <script src="./script/signup.script.js">

    </script>
</body>

</html>