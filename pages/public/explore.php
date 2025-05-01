<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore | Social Media</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200">

  <!-- Vertical Navbar -->
  <nav class="w-64 bg-gray-800 shadow-lg fixed top-0 left-0 h-full z-10 border-r border-gray-700">
    <div>
      <!-- Logo -->
      <div class="flex items-center px-6 py-4 border-b border-gray-700">
        <img src="logo.png" alt="Social Media Logo" class="h-12 w-12">
        <span class="ml-3 text-xl font-bold text-gray-200">Socialify</span>
      </div>
      <!-- Navigation Links -->
      <ul class="mt-4">
        <li class="px-6 py-3 hover:bg-gray-700 flex items-center rounded-md">
          <a href="#" class="ml-3 font-medium">Home</a>
        </li>
        <li class="px-6 py-3 hover:bg-gray-700 flex items-center rounded-md">
          <a href="#" class="ml-3 font-medium">Tweet</a>
        </li>
        <li class="px-6 py-3 hover:bg-gray-700 flex items-center rounded-md bg-gray-700">
          <a href="#" class="ml-3 font-medium">Explore</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Horizontal Navbar -->
  <header class="bg-gray-800 shadow-lg border-b border-gray-700 fixed top-0 left-64 right-0 z-20 p-2">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">
      <div class="relative w-96">
        <input type="text" class="bg-gray-700 text-gray-200 px-4 py-2 rounded-md w-full placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search Explore...">
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none">Search</button>
    </div>
  </header>

  <!-- Main Content -->
  <main class="ml-64 pt-20 px-6 space-y-8">

    <!-- Trending Section -->
    <section>
      <h2 class="text-2xl font-bold mb-4">Trending</h2>
      <div class="flex flex-wrap gap-4">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">#TechReviews</button>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">#Foodies</button>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">#Travel</button>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">#Lifestyle</button>
      </div>
    </section>

    <!-- Explore Posts and Tweets Section -->
    <section>
      <h2 class="text-2xl font-bold mb-4">Explore Content</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Post Card -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
          <img src="post1.jpg" alt="Post Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-lg">Tech Innovations</h3>
            <p class="text-sm text-gray-400 mt-2">Explore the latest gadgets trending now!</p>
            <div class="mt-4 flex items-center justify-between">
              <button class="text-gray-400 hover:text-blue-400 text-sm">Like</button>
              <button class="text-gray-400 hover:text-blue-400 text-sm">Comment</button>
              <button class="text-gray-400 hover:text-blue-400 text-sm">Share</button>
            </div>
          </div>
        </div>

        <!-- Tweet Card -->
        <div class="bg-gray-800 rounded-lg shadow-lg p-4">
          <h3 class="font-semibold text-lg">User123</h3>
          <p class="text-sm text-gray-400 mt-2">Loving the new gadgets this year! #Tech</p>
          <div class="mt-4 flex items-center justify-between">
            <button class="text-gray-400 hover:text-blue-400 text-sm">Like</button>
            <button class="text-gray-400 hover:text-blue-400 text-sm">Reply</button>
            <button class="text-gray-400 hover:text-blue-400 text-sm">Retweet</button>
          </div>
        </div>

        <!-- Another Post Card -->
        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
          <img src="post2.jpg" alt="Post Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-lg">Best Food Spots</h3>
            <p class="text-sm text-gray-400 mt-2">Find the best-reviewed cafes and restaurants!</p>
            <div class="mt-4 flex items-center justify-between">
              <button class="text-gray-400 hover:text-blue-400 text-sm">Like</button>
              <button class="text-gray-400 hover:text-blue-400 text-sm">Comment</button>
              <button class="text-gray-400 hover:text-blue-400 text-sm">Share</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

</body>
</html>
