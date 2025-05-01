<?php  
 session_start();
 if (!(isset($_SESSION['LoggedIN']) && $_SESSION['LoggedIN'] === true)) {
    $_SESSION['error_message'] = "Please log in to access this page.";
    header('location:../../pages/publichome.php');
    exit;
}

 if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
 }
  


?>
<!DOCTYPE html>
<html lang="en" class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../scripts/css/addImagePost.css">

</head>


<body class="min-h-screen bg-gray-50 dark:bg-gray-900 pb-12">
<?php include('../../components/common/header.php') ?>
    <!-- Horizontal Navbar -->
    <header
        class="bg-gradient-to-r from-gray-900 to-black backdrop-blur-md shadow-lg border-b border-gray-800/50 fixed top-0 left-64 right-0 z-20" id="headerTwo">
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
    <!-- Main Container -->
    <main class="ml-60 mx-auto px-4 sm:px-6 lg:px-8 pt-8 mt-12" id="main">
        <!-- Page Title -->
        <div class="fixed top-4 right-4 z-50 space-y-3" id="toast-container">
            <!-- Success Toast -->

            <?php  if(!empty($_SESSION['success_message'])): ?>

            <div class="flex items-center w-full max-w-xs p-4 bg-white border-l-4 border-green-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out animate-slide-in-right"
                role="alert">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-800">Success message here</p>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 text-gray-400 hover:text-gray-900 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <?php unset( $_SESSION['success_message']); ?>
            <?php endif; ?>
            <!-- Error Toast -->

            <?php if(!empty( $_SESSION['error_message'])):  ?>
            <div class="flex items-center w-full max-w-xs p-4 bg-white border-l-4 border-red-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out animate-slide-in-right"
                role="alert">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-800"><?php echo   $_SESSION['error_message'] ?></p>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 text-gray-400 hover:text-gray-900 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <?php  unset( $_SESSION['error_message'])  ?>
            <?php endif; ?>

            <!-- Warning Toast -->
            <!-- <div class="flex items-center w-full max-w-xs p-4 bg-white border-l-4 border-yellow-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out animate-slide-in-right"
                role="alert">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-800">Warning message here</p>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 text-gray-400 hover:text-gray-900 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> -->

            <!-- Info Toast -->
            <!-- <div class="flex items-center w-full max-w-xs p-4 bg-white border-l-4 border-blue-500 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out animate-slide-in-right"
                role="alert">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-800">Information message here</p>
                </div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 text-gray-400 hover:text-gray-900 focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> -->
        </div>

        <!-- Two Column Layout for Larger Screens -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Form -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 mb-8">
                    <form action="../../handlers/handleUserPost/handleImagePost.php" method="post"
                        enctype="multipart/form-data" id="AddForm">
                        <!-- Content Input Section -->
                        <section class="mb-8">
                            <h2 class="flex items-center text-xl font-semibold text-gray-800 dark:text-white mb-4">
                                <i class="fas fa-pencil-alt text-blue-500 mr-2"></i>
                                Post Content
                            </h2>

                            <div class="mb-6">
                                <label class="block font-medium mb-2 text-gray-700 dark:text-gray-300">What's on your
                                    mind?</label>
                                <div class="relative">
                                    <input type="hidden" name="csrf_token"
                                        value="<?php echo $_SESSION['csrf_token']; ?>">

                                    <textarea id="descriptionInput" rows="4" maxlength="500" name="postContent"
                                        class="w-full text-white p-4 border border-gray-200 dark:border-gray-700 rounded-xl resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 transition-all"
                                        placeholder="Write something interesting..."
                                        oninput="updateCharCount(this.value)"></textarea>
                                    <div
                                        class="absolute bottom-3 right-3 bg-blue-50 dark:bg-blue-900/40 px-3 py-1 rounded-full text-sm font-medium">
                                        <span id="charCount" class="text-blue-600 dark:text-blue-400">0</span>
                                        <span class="text-gray-500 dark:text-gray-400">/500</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block font-medium mb-2 text-gray-700 dark:text-gray-300">Upload an
                                    Image</label>
                                <div id="uploadPrompt"
                                    class="cursor-pointer border-2 border-dashed border-gray-300 dark:border-gray-700 p-6 rounded-xl text-center hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-cloud-upload-alt text-blue-500 text-3xl mb-3"></i>
                                        <p class="text-gray-700 dark:text-gray-300 font-medium">Drop your image here, or
                                            <span class="text-blue-500">browse</span>
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Supports: JPG, PNG, GIF
                                            (Max 2MB)</p>
                                    </div>
                                </div>
                                <input type="file" id="imageUpload" accept="image/*" class="hidden" name="image" />
                                <div id="previewImageContainer"
                                    class="mt-4 hidden bg-gray-50 dark:bg-gray-900/50 p-3 rounded-xl border border-gray-200 dark:border-gray-700">
                                    <div class="flex items-center gap-3">
                                        <img id="imagePreview" src="" alt="Image Preview"
                                            class="w-24 h-24 object-cover rounded-lg" />
                                        <div>
                                            <h4 class="font-medium text-gray-800 dark:text-white">Image Selected</h4>
                                            <button id="removeImage"
                                                class="text-red-500 hover:text-red-600 text-sm flex items-center gap-1 mt-1">
                                                <i class="fas fa-trash-alt"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Tags Section -->
                        <section class="mb-8">
                            <h2 class="flex items-center text-xl font-semibold text-gray-800 dark:text-white mb-4">
                                <i class="fas fa-tags text-blue-500 mr-2"></i>
                                Tags
                            </h2>

                            <div class="mb-3">
                                <div class="flex space-x-2">
                                    <div class="relative flex-1">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-hashtag text-gray-400"></i>
                                        </div>
                                        <input id="tagInput" type="text"
                                            class="text-white w-full pl-10 py-3 border border-gray-200 dark:border-gray-700 rounded-lg dark:bg-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Type and press Enter or comma" name="tag" />
                                    </div>
                                    <button id="addTagBtn" type="button"
                                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                        Add Tag
                                    </button>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Add relevant tags to help
                                    others discover your post</p>
                            </div>

                            <div id="tagContainer"
                                class="flex flex-wrap gap-2 min-h-12 p-4 border border-gray-200 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900/30">
                            </div>
                            <input type="hidden" name="tags" id="hiddenTags">
                        </section>

                        <!-- Anonymous Option + Submit Button -->
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                            <label class="flex items-center cursor-pointer gap-3 order-2 sm:order-1">
                                <div class="relative">
                                    <input type="checkbox" id="anonymousToggle" class="sr-only peer" name="anonymous">
                                    <div
                                        class="w-11 h-6 bg-gray-300 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Post Anonymously</span>
                            </label>

                            <input type="submit" value="Publish Post"
                                class="order-1 sm:order-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors shadow-md hover:shadow-lg cursor-pointer w-full sm:w-auto">
                        </div>
                    </form>
                </div>
            </div>


         <?php
          include('../../components/db/dbconnect.php');
          $userId=$_SESSION['id'];
           
          $stmt=$myconnect->prepare('SELECT * FROM users WHERE id=?');
          $stmt->bind_param('i',$userId);
          $result=$stmt->execute();
          $resultTwo=$stmt->get_result();
          $row=$resultTwo->fetch_assoc();
         
         
         ?>


            <!-- Right Column - Preview -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden mb-6">
                        <div class="bg-blue-600 text-white px-6 py-4">
                            <h2 class="font-bold text-lg">Post Preview</h2>
                            <p class="text-blue-100 text-sm">See how your post will look</p>
                        </div>
                        <div class="p-6">
                            <div
                                class="flex items-center space-x-3 mb-4 pb-4 border-b border-gray-100 dark:border-gray-700">
                                <img id="previewAvatar" src="/api/placeholder/100/100"
                                    class="w-12 h-12 rounded-full object-cover ring-2 ring-gray-200 dark:ring-gray-700" />
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span id="previewUsername" class="font-bold text-gray-800 dark:text-white"><?php echo $row['username'] ?></span>
                                        <span id="anonymousBadge"
                                            class="hidden px-2 py-0.5 bg-gray-200 dark:bg-gray-700 text-xs font-medium rounded-full">Anonymous</span>
                                    </div>
                                    <div class="text-xs text-gray-500 flex items-center">
                                        <i class="fas fa-clock mr-1"></i> Just now
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p id="previewText" class="text-gray-700 dark:text-gray-300">Your post preview will
                                    appear here...</p>
                            </div>

                            <div class="text-sm font-medium text-blue-500" id="previewTags"></div>

                            <div class="mt-6 pt-4 border-t border-gray-100 dark:border-gray-700">
                                <div class="flex justify-between text-gray-500 dark:text-gray-400 text-sm">
                                    <button class="flex items-center hover:text-blue-600 transition-colors">
                                        <i class="far fa-thumbs-up mr-1"></i> Like
                                    </button>
                                    <button class="flex items-center hover:text-blue-600 transition-colors">
                                        <i class="far fa-comment mr-1"></i> Comment
                                    </button>
                                    <button class="flex items-center hover:text-blue-600 transition-colors">
                                        <i class="far fa-share-square mr-1"></i> Share
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6">
                        <h3 class="font-medium text-gray-800 dark:text-white mb-3">Posting Tips</h3>
                        <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-300">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Add relevant tags to increase visibility</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Include an image to make your post stand out</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Be specific in your review or feedback</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Respond to comments to increase engagement</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

  <?php include('../../assets/loader/loader.php') ?>


    <!-- Script -->
    <script src="../../scripts/js/addImagePost.js">
    

    </script>

</body>

</html>