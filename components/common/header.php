<nav class="w-20 md:w-64 bg-gradient-to-b from-gray-900 to-black shadow-xl flex flex-col justify-between fixed top-0 left-0 h-full z-10 border-r border-gray-800 transition-all duration-300" id="header">
    <!-- Logo Section -->
    <div>
        <!-- Logo -->
        <div class="flex justify-center items-center p-4 border-b border-opacity-30 border-gray-700">
            <div class="relative">
                <img src="../../assets/logo/newlogo2.png" alt="Postly Logo" class="h-12 filter drop-shadow-lg">
                <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 rounded-full"></div>
            </div>
            <img src="../../assets/logo/textfx.png" alt="Profile Image" class="hidden md:block w-36 h-10 ml-2">
        </div>

        <!-- Nav Links -->
        <ul class="mt-6 space-y-1 px-2">
            <!-- Home -->
            <li class="group">
                <a href="../../pages/public/home.php" class="flex items-center p-3 rounded-lg bg-blue-600 bg-opacity-20 text-white transition-all duration-200 hover:bg-blue-600 relative overflow-hidden">
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-center justify-center text-xl w-10 relative z-10">
                        <i class="fas fa-home"></i>
                    </div>
                    <span class="ml-3 font-medium hidden md:block relative z-10">Home</span>
                    <span class="h-full w-1 bg-blue-400 absolute left-0 top-0"></span>
                </a>
            </li>

            <!-- Tweets -->
            <li class="group">
                <a href="../../pages/public/tweet.php" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10">
                        <i class="fas fa-feather-alt"></i>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Tweets</span>
                </a>
            </li>

            <!-- Explore -->
            <li class="group">
                <a href="../../pages/public/explore.php" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10">
                        <i class="fas fa-compass"></i>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Explore</span>
                </a>
            </li>

            <!-- Profile -->
            <li class="group">
                <a href="../../pages/user/profile.php" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Profile</span>
                </a>
            </li>
            
            <!-- Notifications -->
            <li class="group">
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10 relative">
                        <i class="fas fa-bell"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center shadow-lg pulse-animation">3</span>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Notifications</span>
                </a>
            </li>
            
            <!-- Messages -->
            <li class="group">
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10 relative">
                        <i class="fas fa-envelope"></i>
                        <span class="absolute -top-1 -right-1 bg-blue-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center shadow-lg">2</span>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Messages</span>
                </a>
            </li>
            
            <!-- Bookmarks -->
            <li class="group">
                <a href="../../pages/user/bookmarks.php" class="flex items-center p-3 rounded-lg hover:bg-blue-600 hover:bg-opacity-20 transition-all duration-200 text-gray-400 hover:text-white">
                    <div class="flex items-center justify-center text-xl w-10">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <span class="ml-3 font-medium hidden md:block">Bookmarks</span>
                </a>
            </li>
            
            <!-- Create Post Button -->
            <!-- <li class="mt-6 px-2">
                <button class="w-full rounded-full bg-gradient-to-r from-blue-500 to-blue-600 py-3 text-white font-bold shadow-lg hover:shadow-blue-500/30 hover:scale-105 transform transition-all duration-200">
                    <i class="fas fa-plus md:hidden"></i>
                    <span class="hidden md:inline">Create Post</span>
                </button>
            </li> -->
        </ul>
    </div>

    <!-- User Section -->
    <div class="px-4 py-4 mt-auto border-t border-opacity-30 border-gray-700">
        <div class="flex items-center group cursor-pointer rounded-lg p-2 hover:bg-gray-800 transition-all duration-200">
            <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center overflow-hidden ring-2 ring-white ring-opacity-30">
                <img src="/api/placeholder/40/40" alt="Profile" class="w-full h-full object-cover">
            </div>
            <div class="ml-3 hidden md:block">
                <p class="text-sm font-medium text-white">Username</p>
                <p class="text-xs text-gray-400">@username</p>
            </div>
            
            <div class="ml-auto hidden md:flex flex-row items-center space-x-1">
                <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                <span class="text-xs text-gray-400">Online</span>
            </div>
        </div>
        
        <!-- Settings & Logout Dropdown -->
        <div class="mt-2 hidden md:block">
            <a href="#" class="flex items-center p-2 text-sm text-gray-400 hover:text-white">
                <i class="fas fa-cog mr-3 text-sm"></i>
                <span>Settings</span>
            </a>
            <a href="logout.php" class="flex items-center p-2 text-sm text-gray-400 hover:text-red-400">
                <i class="fas fa-sign-out-alt mr-3 text-sm"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>
    
    <!-- Toggle Button for Mobile -->
    <div class="absolute -right-3 top-20 bg-blue-600 rounded-full p-1 cursor-pointer shadow-lg hidden sm:flex items-center justify-center hover:bg-blue-500 transition-colors duration-200">
        <i class="fas fa-chevron-right text-white text-xs"></i>
    </div>
    
    <!-- Bottom Mobile Menu for Logout and Settings -->
    <div class="md:hidden flex justify-evenly py-3 border-t border-gray-800 border-opacity-30">
        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
            <i class="fas fa-cog"></i>
        </a>
        <a href="../../handlers/auth/logout.php" class="text-gray-400 hover:text-red-400 transition-colors duration-200">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</nav>

<style>
/* Add these styles to your CSS file */
.pulse-animation {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
    }
    70% {
        box-shadow: 0 0 0 6px rgba(239, 68, 68, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
    }
}
</style>