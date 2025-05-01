<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enhanced Social Media FAB</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
 <link rel="stylesheet" href="../../scripts/css/floatingButton.css">
</head>
<body class="bg-gray-100 h-screen">

  <!-- Improved FAB with pulse effect -->
  <div id="fabButton" 
       class="fixed bottom-6 right-6 h-16 w-16 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white cursor-pointer transform transition-all duration-300 hover:scale-110 active:scale-95 shadow-lg ripple-effect z-50">
       
    <!-- Creative pencil icon with animation -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
    </svg>
  </div>

  <!-- Enhanced Dialog Box (Hidden by default) -->
  <div id="postDialog" 
       class="fixed bottom-24 right-6 w-72 glass-effect rounded-xl py-4 px-3 hidden shadow-xl slide-up z-40 custom-scrollbar max-h-96 overflow-y-auto">
    
    <div class="flex justify-between items-center mb-4 px-2">
      <h3 class="font-semibold text-gray-800 text-lg">Create Post</h3>
      <div id="closeDialog" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-200 cursor-pointer transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </div>
    </div>
    
    <!-- Text Post Option with enhanced UI -->
    <div class="fancy-border mb-3 option-hover" onclick="createTextPost()">
      <div class="flex items-center p-3 cursor-pointer">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center mr-4 shadow-md">
          <i class="fas fa-pencil-alt text-white text-lg"></i>
        </div>
        <a href="../../pages/user/AddTweet.php"><div>
          <span class="text-gray-800 font-medium text-lg">Text Post</span>
          <p class="text-gray-500 text-sm">Share your thoughts</p>
        </div></a>
        
        <div class="ml-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
    
    <!-- Image Post Option with enhanced UI -->
    <div class="fancy-border mb-3 option-hover" onclick="createImagePost()">
      <div class="flex items-center p-3 cursor-pointer">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center mr-4 shadow-md">
          <i class="fas fa-image text-white text-lg"></i>
        </div>
        <a href="../../pages/user/AddImagePost.php"> <div>
          <span class="text-gray-800 font-medium text-lg">Image Post</span>
          <p class="text-gray-500 text-sm">Share your photos</p>
        </div></a>
        <div class="ml-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
    
    <!-- Video Post Option with enhanced UI -->
    <div class="fancy-border option-hover" onclick="createVideoPost()">
      <div class="flex items-center p-3 cursor-pointer">
        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center mr-4 shadow-md">
          <i class="fas fa-video text-white text-lg"></i>
        </div>
        <a href="../../pages/user/AddvideoPost.php"><div>
          <span class="text-gray-800 font-medium text-lg">Video Post</span>
          <p class="text-gray-500 text-sm">Share your videos</p>
        </div></a>
        <div class="ml-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
    
    <!-- Quick Post Section -->
    <!-- <div class="mt-4 pt-3 border-t border-gray-200">
      <div class="text-sm text-gray-500 mb-2 px-2">Quick Post</div>
      <div class="flex justify-around">
        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors" title="Quick Text">
          <i class="fas fa-comment text-gray-600"></i>
        </div>
        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors" title="Upload Photo">
          <i class="fas fa-camera text-gray-600"></i>
        </div>
        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors" title="Live Video">
          <i class="fas fa-video text-gray-600"></i>
        </div>
        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center cursor-pointer hover:bg-gray-200 transition-colors" title="Poll">
          <i class="fas fa-chart-bar text-gray-600"></i>
        </div>
      </div>
    </div> -->
  </div>

  <script src="../../scripts/js/floatingButton.js">
    
  </script>
</body>
</html>