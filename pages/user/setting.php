<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings | Social Media</title>
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
        <li class="px-6 py-3 hover:bg-gray-700 flex items-center rounded-md">
          <a href="#" class="ml-3 font-medium">Explore</a>
        </li>
        <li class="px-6 py-3 hover:bg-gray-700 flex items-center rounded-md">
          <a href="#" class="ml-3 font-medium">Profile</a>
        </li>
        <li class="px-6 py-3 bg-gray-700 flex items-center rounded-md">
          <a href="#" class="ml-3 font-medium">Settings</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="ml-64 pt-20 px-6">
    <section class="max-w-4xl mx-auto bg-gray-800 p-6 rounded-lg shadow-md">
      <h1 class="text-2xl font-bold mb-6">Settings</h1>

      <!-- Profile Settings -->
      <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4">Profile Settings</h2>
        <div class="space-y-4">
          <div>
            <label class="block text-sm mb-2">Name</label>
            <input type="text" class="w-full bg-gray-700 text-gray-200 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
          </div>
          <div>
            <label class="block text-sm mb-2">Username</label>
            <input type="text" class="w-full bg-gray-700 text-gray-200 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your username">
          </div>
          <div>
            <label class="block text-sm mb-2">Profile Picture</label>
            <input type="file" class="block w-full bg-gray-700 text-gray-200 px-4 py-2 rounded-md">
          </div>
        </div>
      </div>

      <!-- Privacy Settings -->
      <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4">Privacy Settings</h2>
        <div class="space-y-4">
          <div>
            <label class="block text-sm mb-2">Account Visibility</label>
            <select class="w-full bg-gray-700 text-gray-200 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="public">Public</option>
              <option value="private">Private</option>
            </select>
          </div>
          <div>
            <label class="block text-sm mb-2">Change Password</label>
            <input type="password" class="w-full bg-gray-700 text-gray-200 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter new password">
          </div>
        </div>
      </div>

      <!-- Notification Settings -->
      <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4">Notification Settings</h2>
        <div class="space-y-4">
          <div class="flex items-center">
            <input type="checkbox" id="post-notifications" class="bg-gray-700 border-gray-600 focus:ring-blue-500 rounded">
            <label for="post-notifications" class="ml-3 text-sm">Notify me about new posts</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" id="message-notifications" class="bg-gray-700 border-gray-600 focus:ring-blue-500 rounded">
            <label for="message-notifications" class="ml-3 text-sm">Notify me about new messages</label>
          </div>
          <div class="flex items-center">
            <input type="checkbox" id="mention-notifications" class="bg-gray-700 border-gray-600 focus:ring-blue-500 rounded">
            <label for="mention-notifications" class="ml-3 text-sm">Notify me when someone mentions me</label>
          </div>
        </div>
      </div>

      <!-- Save Changes -->
      <div>
        <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Save Changes</button>
      </div>
    </section>
  </main>

</body>
</html>
