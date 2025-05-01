<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Postly - Tweet Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');


    .fab {
        position: fixed;
        bottom: 90px;
        /* Adjusted to prevent overlap with the chatbox */
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #2563eb;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        z-index: 1000;
        /* Ensure FAB appears on top of other elements */
    }

    .fab:hover {
        background-color: #2555be !important;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-3px);
    }

    .fab:active {
        transform: translateY(1px);
    }

    /* Bouncing animation */
    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-bounce {
        animation: bounce 1s infinite;
    }
    </style>
</head>

<body class="bg-[#202020] text-white">

    <?php include('./compoenets/header/header.php') ?>

    <!-- Horizontal Navbar -->
    <header class="bg-[#121212] shadow-lg border-b border-gray-800 fixed top-0 left-64 right-0 z-20 ">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Nav Links Section -->
            <div class="flex items-center space-x-8">
                <butto
                    class="px-6 py-2 rounded-lg text-white font-semibold  hover:bg-[#383838] transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <a href="tweet.php">For You</a>
                </butto>
                <button
                    class="px-6 py-2 rounded-lg text-gray-400 font-semibold bg-[#292929] hover:text-white hover:bg-[#383838] transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <a href="following.php">Following</a>
                </button>
            </div>

            <!-- Icons Section -->
            <div class="flex items-center space-x-6">
                <!-- Message Icon -->
                <button
                    class="p-3 rounded-full bg-[#292929] hover:bg-gray-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-comment-dots text-xl text-gray-300 hover:text-white"></i>
                </button>

                <!-- Notification Icon -->
                <button
                    class="p-3 rounded-full bg-[#292929] hover:bg-gray-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-bell text-xl text-yellow-400 hover:text-yellow-500"></i>
                </button>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="mt-20 ml-64 pr-1 pt-2 pl-1">
        <!-- Post a Tweet Section -->


        <!-- Tweets Feed -->
        <section class="">
           
            <!-- Single Tweet -->
            <div class="bg-[#121212] p-4 rounded-lg shadow-md border-b border-gray-800">
                <!-- Top Section -->
                <div class="flex items-center justify-between mt-2">
                    <div class="flex items-center space-x-4">
                        <!-- Profile Picture -->
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full" />
                        <!-- Name and Handle -->
                        <div>
                            <h3 class="font-semibold text-white">John Doe</h3>
                            <p class="text-sm text-gray-400">@johndoe</p>
                        </div>
                    </div>
                    <!-- Dropdown and Follow Button -->
                    <div class="flex items-center space-x-2">

                        <div class="relative">
                            <!-- Dropdown Trigger -->
                            <button id="dropdownButton" class="p-2 rounded-full hover:bg-gray-800 transition"
                                onclick="toggleDropdown()">
                                <i class="fas fa-ellipsis-h text-gray-400"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownMenu"
                                class="absolute right-0 mt-2 w-48 bg-[#121212] border border-gray-700 rounded-lg shadow-md hidden">
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Follow</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Mute</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Block</a>
                                <a href="#"
                                    class="block px-4 py-2 text-red-500 hover:bg-red-700 hover:text-white transition">Report</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tweet Content -->
                <p class="mt-3 text-gray-300">
                    This is an example of a tweet. It’s short and straight to the point!
                </p>

                <!-- Action Buttons -->
                <div class="mt-4 flex items-center gap-4 text-gray-400 text-sm">
                    <!-- Reply -->

                    <!-- Like -->
                    <button class="flex items-center space-x-2 hover:text-green-400 transition">
                        <i class="fas fa-thumbs-up"></i>
                        <span>Like</span>
                    </button>
                    <!-- Dislike -->
                    <button class="flex items-center space-x-2 hover:text-red-400 transition">
                        <i class="fas fa-thumbs-down"></i>
                        <span>Dislike</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-blue-400 transition">
                        <i class="fas fa-reply"></i>
                        <span>Reply</span>
                    </button>
                    <!-- Share -->
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="fas fa-share"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>

            <div class="bg-[#121212] p-4 rounded-lg shadow-md mb-4">
                <!-- Top Section -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <!-- Profile Picture -->
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full" />
                        <!-- Name and Handle -->
                        <div>
                            <h3 class="font-semibold text-white">John Doe</h3>
                            <p class="text-sm text-gray-400">@johndoe</p>
                        </div>
                    </div>
                    <!-- Dropdown and Follow Button -->
                    <div class="flex items-center space-x-2">

                        <div class="relative">
                            <!-- Dropdown Trigger -->
                            <button id="dropdownButton" class="p-2 rounded-full hover:bg-gray-800 transition"
                                onclick="toggleDropdown()">
                                <i class="fas fa-ellipsis-h text-gray-400"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownMenu"
                                class="absolute right-0 mt-2 w-48 bg-[#121212] border border-gray-700 rounded-lg shadow-md hidden">
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Follow</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Mute</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition">Block</a>
                                <a href="#"
                                    class="block px-4 py-2 text-red-500 hover:bg-red-700 hover:text-white transition">Report</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tweet Content -->
                <p class="mt-3 text-gray-300">
                    This is an example of a tweet. It’s short and straight to the point! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio excepturi deleniti ipsa voluptas facilis temporibus nulla hic molestias, ut ea qui! Dolorum, est ipsam officiis ratione ipsum cupiditate fuga sit labore consequuntur magnam alias repudiandae nulla molestias. Iste, iusto quaerat quae aliquid harum, eum velit nesciunt aspernatur quisquam porro veritatis, totam ad voluptatem nulla rerum cupiditate repellat inventore ea hic error. Quod at, amet explicabo itaque reiciendis nobis, ratione fugit quidem, nulla obcaecati possimus eius cumque. Illum aliquam vitae dolorum laboriosam, rerum veniam doloribus quis voluptatum, culpa tenetur nulla repudiandae ea maiores iure vero commodi mollitia et provident ducimus odit.
                </p>

                <!-- Action Buttons -->
                <div class="mt-4 flex items-center gap-4 text-gray-400 text-sm">
                    <!-- Reply -->

                    <!-- Like -->
                    <button class="flex items-center space-x-2 hover:text-green-400 transition">
                        <i class="fas fa-thumbs-up"></i>
                        <span>Like</span>
                    </button>
                    <!-- Dislike -->
                    <button class="flex items-center space-x-2 hover:text-red-400 transition">
                        <i class="fas fa-thumbs-down"></i>
                        <span>Dislike</span>
                    </button>
                    <button class="flex items-center space-x-2 hover:text-blue-400 transition">
                        <i class="fas fa-reply"></i>
                        <span>Reply</span>
                    </button>
                    <!-- Share -->
                    <button class="flex items-center space-x-2 hover:text-yellow-400 transition">
                        <i class="fas fa-share"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>


        </section>
    </main>

    <!-- Floating Action Button -->
    <div id="fabButton"
        class="fab flex items-center justify-center w-14 h-14 bg-[#4CAF50] rounded-full shadow-lg transform hover:scale-110 hover:active:scale-95 transition-all duration-300 ease-in-out animate-bounce"
        onclick="scrollToCommentForm()" title="Add a Tweet">
        <!-- Feather Icon for Post -->
        <i class="fas fa-feather text-white text-2xl"></i>
    </div>


    <script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.classList.toggle('hidden');
    }

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdownMenu');
        const button = document.getElementById('dropdownButton');
        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
    </script>

</body>

</html>