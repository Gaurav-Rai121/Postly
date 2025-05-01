<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms of Service - Connectify</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/login.style.css">
  <link rel="stylesheet" href="../../scripts/css/term.style.css">
</head>
<body class="bg-gray-50 text-gray-800">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>

  <!-- Navigation -->
  <header class="fixed top-0 left-0 right-0 z-50">
    <nav class="sticky-header bg-white bg-opacity-80 border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <div class="h-10 w-10 rounded-full bg-gradient-custom flex items-center justify-center mr-2">
                <i class="fas fa-network-wired text-white"></i>
              </div>
              <span class="font-bold text-xl text-gradient">Connectify</span>
            </div>
            <div class="hidden sm:ml-10 sm:flex sm:space-x-8">
              <a href="index.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Home</a>
              <a href="about.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition-colors duration-300">About</a>
              <a href="features.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Features</a>
              <a href="pricing.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Pricing</a>
              <a href="contact.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Contact</a>
            </div>
          </div>
          <div class="flex items-center">
            <a href="login.php" class="text-gray-500 hover:text-indigo-600 px-4 py-2 text-sm font-medium transition-colors duration-300">Log In</a>
            <a href="signup.php" class="ml-4 px-4 py-2 text-sm font-medium text-white bg-gradient-custom rounded-full hover:opacity-90 transition-all duration-300">Sign Up</a>
            <button class="ml-4 sm:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
              <i class="fas fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Mobile menu, show/hide based on menu state -->
      <div class="sm:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="index.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Home</a>
          <a href="about.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">About</a>
          <a href="features.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Features</a>
          <a href="pricing.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Pricing</a>
          <a href="contact.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Contact</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Header Section with Animated Elements -->
  <section class="terms-header pt-32 pb-20 md:pt-40 md:pb-28 relative overflow-hidden">
    <div class="floating-shapes">
      <div class="shape bg-blue-500" style="width: 300px; height: 300px; top: -100px; left: -50px; animation-delay: 0s;"></div>
      <div class="shape bg-purple-500" style="width: 200px; height: 200px; top: 50%; right: -100px; animation-delay: 2s;"></div>
      <div class="shape bg-pink-500" style="width: 150px; height: 150px; bottom: -50px; left: 30%; animation-delay: 4s;"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto">
        <div class="inline-block mb-4">
          <div class="h-16 w-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mx-auto pulse-effect">
            <i class="fas fa-file-contract text-white text-2xl"></i>
          </div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight text-white">
          Terms of Service
        </h1>
        <p class="text-lg text-white text-opacity-90 mb-8">
          Guidelines for using our platform, posting reviews, and interacting with our community
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="#agreement" class="px-8 py-3 bg-white text-indigo-600 font-medium rounded-full hover:bg-opacity-90 transition-all duration-300 shadow-lg">
            <i class="fas fa-chevron-down mr-2"></i> Read Terms
          </a>
          <a href="#faq" class="px-8 py-3 border border-white text-white font-medium rounded-full hover:bg-white hover:bg-opacity-10 transition-all duration-300">
            <i class="fas fa-question-circle mr-2"></i> FAQ
          </a>
        </div>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-gray-50 to-transparent z-10"></div>
  </section>

  <!-- Last Updated Banner -->
  <div class="bg-indigo-50 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <span class="text-gray-500 text-sm">Last Updated: April 16, 2025</span>
        </div>
        <div class="flex items-center">
          <a href="terms-archive.php" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium mr-6">
            <i class="fas fa-history mr-2"></i> Previous Versions
          </a>
          <a href="terms.pdf" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
            <i class="fas fa-file-pdf mr-2"></i> Download PDF
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation Bar with Icons -->
  <section id="terms-nav" class="bg-white border-b border-gray-200 sticky top-16 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center space-x-1 sm:space-x-4 overflow-x-auto terms-nav-scroll whitespace-nowrap py-4" style="-webkit-overflow-scrolling: touch;">
        <a href="#agreement" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-handshake mr-2"></i> User Agreement
        </a>
        <a href="#access" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-door-open mr-2"></i> Account Access
        </a>
        <a href="#content" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-pen-fancy mr-2"></i> User Content
        </a>
        <a href="#reviews" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-star mr-2"></i> Reviews & Ratings
        </a>
        <a href="#conduct" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-users mr-2"></i> Code of Conduct
        </a>
        <a href="#intellectual" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-copyright mr-2"></i> IP Rights
        </a>
        <a href="#termination" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-ban mr-2"></i> Termination
        </a>
        <a href="#liability" class="text-gray-600 hover:text-indigo-600 font-medium text-sm px-3 py-2 rounded-lg hover:bg-indigo-50 transition-colors duration-200 flex items-center">
          <i class="fas fa-gavel mr-2"></i> Liability
        </a>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-col lg:flex-row">
      <!-- Sidebar -->
      <div class="lg:w-64 lg:flex-none lg:mr-10 mb-8 lg:mb-0">
        <div class="bg-white rounded-xl shadow-custom p-6 sticky top-36">
          <h3 class="font-semibold text-lg mb-4">Table of Contents</h3>
          <ul class="space-y-2">
            <li>
              <a href="#agreement" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">1</span>
                User Agreement
              </a>
            </li>
            <li>
              <a href="#access" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">2</span>
                Account Access
              </a>
            </li>
            <li>
              <a href="#content" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">3</span>
                User Content
              </a>
            </li>
            <li>
              <a href="#reviews" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">4</span>
                Reviews & Ratings
              </a>
            </li>
            <li>
              <a href="#conduct" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">5</span>
                Code of Conduct
              </a>
            </li>
            <li>
              <a href="#intellectual" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">6</span>
                Intellectual Property
              </a>
            </li>
            <li>
              <a href="#termination" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">7</span>
                Termination
              </a>
            </li>
            <li>
              <a href="#liability" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">8</span>
                Limitation of Liability
              </a>
            </li>
            <li>
              <a href="#disputes" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">9</span>
                Disputes & Governing Law
              </a>
            </li>
            <li>
              <a href="#changes" class="terms-card block p-3 rounded-lg hover:bg-indigo-50 transition-all duration-300 flex items-center">
                <span class="h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 text-xs font-medium text-indigo-600">10</span>
                Changes to Terms
              </a>
            </li>
          </ul>
          
          <hr class="my-6 border-gray-200">
          
          <div class="highlight-box p-1">
            <div class="bg-white rounded-lg p-5">
              <div class="flex items-center mb-3">
                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                  <i class="fas fa-comment-dots text-indigo-600"></i>
                </div>
                <h4 class="font-medium">Have Questions?</h4>
              </div>
              <p class="text-sm text-gray-600 mb-4">
                Our team is happy to clarify any parts of our terms. Reach out with any questions.
              </p>
              <a href="contact.php" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 flex items-center">
                Contact Support <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Content -->
      <div class="lg:flex-grow">
        <!-- Introduction Card -->
        <div class="bg-white rounded-xl shadow-custom p-6 md:p-8 mb-8">
          <div class="flex flex-col sm:flex-row items-center sm:items-start mb-6">
            <div class="h-16 w-16 rounded-full bg-gradient-custom flex items-center justify-center mb-4 sm:mb-0 sm:mr-6">
              <i class="fas fa-scroll text-white text-2xl"></i>
            </div>
            <div>
              <h2 class="text-2xl md:text-3xl font-bold mb-3 text-center sm:text-left">Welcome to Connectify's Terms of Service</h2>
              <p class="text-gray-600">
                These Terms of Service govern your use of Connectify, including our website, mobile application, and all related services. 
                Our platform enables you to connect with others, share content, and post reviews and feedback about various topics, 
                products, services, and experiences. By accessing or using Connectify, you agree to be bound by these terms.
              </p>
            </div>
          </div>
          
          <div class="bg-indigo-50 rounded-lg p-5 flex items-start sm:items-center flex-col sm:flex-row">
            <div class="rounded-full bg-indigo-100 p-3 mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
              <i class="fas fa-lightbulb text-indigo-600 text-xl"></i>
            </div>
            <div>
              <h4 class="font-medium mb-2">Quick Navigation Tip</h4>
              <p class="text-sm text-gray-600">
                Use the table of contents on the left or the navigation bar above to quickly jump to specific sections of our Terms of Service.
                Each section provides detailed information about different aspects of using our platform.
              </p>
            </div>
          </div>
        </div>

        <!-- User Agreement Section -->
        <section id="agreement" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-handshake text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">User Agreement</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-4">
                By accessing or using Connectify, you agree to these Terms of Service. If you disagree with any part of these terms, 
                you may not access or use our services.
              </p>
              
              <div class="timeline-container mt-8 mb-6">
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Accepting the Terms</h4>
                    <p class="text-gray-600">
                      You accept these terms by signing up for an account, accessing our platform, or continuing to use our services 
                      after being notified of changes to these Terms of Service.
                    </p>
                  </div>
                </div>
                
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Eligibility</h4>
                    <p class="text-gray-600">
                      You must be at least 13 years old to use our services. If you are under 18, you represent that you have your 
                      parent or guardian's permission to use our services and that they have read and agree to these terms.
                    </p>
                  </div>
                </div>
                
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Additional Policies</h4>
                    <p class="text-gray-600">
                      These terms incorporate by reference our Privacy Policy, Community Guidelines, and Content Policies, 
                      which together form the complete agreement between you and Connectify.
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="bg-gradient-soft rounded-lg p-5">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-exclamation text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Important Notice</h4>
                    <p class="text-sm text-gray-600">
                      By using Connectify, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service. 
                      If you do not agree to all the terms and conditions, you must not use our services.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Account Access Section -->
        <section id="access" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-door-open text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Account Access</h2>
            </div>
            
            <div class="prose max-w-none">
            <p class="text-gray-600 mb-6">
                Creating an account gives you access to our platform features and allows you to connect with other users, post content, and interact with the Connectify community. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.
              </p>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-user-shield text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Account Security</h4>
                  </div>
                  <p class="text-gray-600 text-sm">
                    You are responsible for keeping your password secure. We recommend using a strong, unique password and enabling two-factor authentication. Never share your login credentials with others.
                  </p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-user-plus text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Account Information</h4>
                  </div>
                  <p class="text-gray-600 text-sm">
                    You must provide accurate, current, and complete information during registration and keep your profile information updated. We may verify your information and reserve the right to suspend accounts with false information.
                  </p>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Account Restrictions</h3>
              <ul class="space-y-4 mb-6">
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">One User, One Account:</span> You may not create multiple accounts for a single individual or entity. Each user is limited to maintaining one active account on our platform.
                  </p>
                </li>
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">No Account Sharing:</span> Your account is personal to you and may not be transferred or shared with others. You are responsible for all activity that occurs under your account.
                  </p>
                </li>
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">No Unauthorized Access:</span> You may not attempt to access another user's account or gain unauthorized access to our systems or networks.
                  </p>
                </li>
              </ul>
              
              <div class="bg-indigo-50 rounded-lg p-5 mb-6">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-info text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Account Recovery</h4>
                    <p class="text-sm text-gray-600">
                      If you forget your password or have trouble accessing your account, you can use our account recovery options. Make sure to keep your recovery email and phone number up to date to ensure you can regain access if needed.
                    </p>
                  </div>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Account Termination</h3>
              <p class="text-gray-600 mb-4">
                We reserve the right to suspend or terminate your account if you violate these Terms of Service or engage in activities that could harm the Connectify platform or community. You may also delete your own account at any time through your account settings.
              </p>
            </div>
          </div>
        </section>

        <!-- User Content Section -->
        <section id="content" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-pen-fancy text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">User Content</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                Connectify allows you to post, upload, share, and store content, including text, photos, videos, and other materials. By providing content on our platform, you grant us certain rights while retaining ownership of your content.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Content Ownership & License</h3>
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <p class="text-gray-600 mb-4">
                  You retain all ownership rights to the content you submit to Connectify. However, by posting content on our platform, you grant us a worldwide, non-exclusive, royalty-free license (with the right to sublicense) to use, copy, reproduce, process, adapt, modify, publish, transmit, display, and distribute your content in any and all media or distribution methods.
                </p>
                <p class="text-gray-600">
                  This license authorizes us to make your content available to the rest of the world and to let others do the same. You agree that this license includes the right for Connectify to provide, promote, and improve our services and to make content submitted to or through our services available to other companies, organizations or individuals for the syndication, broadcast, distribution, promotion, or publication of such content.
                </p>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Content Guidelines</h3>
              <p class="text-gray-600 mb-4">
                All content must comply with these Terms of Service and our Community Guidelines. You are responsible for ensuring that you have all necessary rights to post content and that your content does not violate the rights of any third party.
              </p>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-check text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Permitted Content</h4>
                  </div>
                  <ul class="text-gray-600 text-sm space-y-2">
                    <li class="flex items-start">
                      <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                      <span>Original content you created or have rights to share</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                      <span>Honest and helpful reviews, feedback, and opinions</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                      <span>Constructive criticism and respectful debate</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                      <span>Creative content that respects intellectual property rights</span>
                    </li>
                  </ul>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-ban text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Prohibited Content</h4>
                  </div>
                  <ul class="text-gray-600 text-sm space-y-2">
                    <li class="flex items-start">
                      <i class="fas fa-times-circle text-red-500 mr-2 mt-1"></i>
                      <span>Illegal, harmful, threatening, or abusive content</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-times-circle text-red-500 mr-2 mt-1"></i>
                      <span>Infringing or violating intellectual property rights</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-times-circle text-red-500 mr-2 mt-1"></i>
                      <span>Misleading, fraudulent, or deceptive content</span>
                    </li>
                    <li class="flex items-start">
                      <i class="fas fa-times-circle text-red-500 mr-2 mt-1"></i>
                      <span>Privacy-violating content about others</span>
                    </li>
                  </ul>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Content Removal</h3>
              <p class="text-gray-600 mb-4">
                We reserve the right to remove any content that violates these Terms of Service or our Community Guidelines. We may also remove content upon receiving proper notification of alleged copyright or trademark infringement. You can report violations through our reporting tools.
              </p>
              
              <div class="bg-indigo-50 rounded-lg p-5">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-shield-alt text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Content Backup</h4>
                    <p class="text-sm text-gray-600">
                      We recommend maintaining your own backup of any important content you post on Connectify. While we strive to maintain the integrity and availability of your content, we are not responsible for content loss due to technical issues, account suspension, or other circumstances.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Reviews & Ratings Section -->
        <section id="reviews" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-star text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Reviews & Ratings</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                Our platform allows users to share reviews, ratings, and feedback about products, services, businesses, and experiences. These contributions help build a valuable resource for our community, but must adhere to specific guidelines to maintain integrity.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Review Guidelines</h3>
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <p class="text-gray-600 mb-4">
                  When posting reviews on Connectify, you agree to follow these guidelines:
                </p>
                <ul class="text-gray-600 space-y-3">
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-check text-indigo-600 text-xs"></i>
                    </div>
                    <p><span class="font-medium">Authentic Experience:</span> Only post reviews based on your genuine first-hand experience.</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-check text-indigo-600 text-xs"></i>
                    </div>
                    <p><span class="font-medium">Honesty:</span> Provide truthful and accurate information in your reviews and ratings.</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-check text-indigo-600 text-xs"></i>
                    </div>
                    <p><span class="font-medium">Relevance:</span> Keep your review focused on the specific product, service, or experience being reviewed.</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-check text-indigo-600 text-xs"></i>
                    </div>
                    <p><span class="font-medium">Respect:</span> Maintain a respectful tone even when sharing criticism or negative experiences.</p>
                  </li>
                </ul>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Prohibited Review Practices</h3>
              <ul class="space-y-4 mb-6">
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">False Reviews:</span> Creating fake reviews or misrepresenting your experience.
                  </p>
                </li>
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">Incentivized Reviews:</span> Posting reviews in exchange for payment, discounts, free products, or other incentives without proper disclosure.
                  </p>
                </li>
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">Conflict of Interest:</span> Reviewing your own business, your employer's business, or a competitor's business without disclosure.
                  </p>
                </li>
                <li class="flex">
                  <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                    <i class="fas fa-times text-indigo-600 text-xs"></i>
                  </div>
                  <p class="text-gray-600">
                    <span class="font-medium">Review Manipulation:</span> Attempting to artificially increase or decrease ratings, or engaging in review trading.
                  </p>
                </li>
              </ul>
              
              <div class="bg-gradient-soft rounded-lg p-5 mb-6">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-lightbulb text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Review Disclosure Requirements</h4>
                    <p class="text-sm text-gray-600">
                      If you received free products, services, or other benefits related to what you're reviewing, you must clearly disclose this in your review. Similarly, if you have a personal or business relationship with what you're reviewing, this must be disclosed to maintain transparency.
                    </p>
                  </div>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Review Moderation</h3>
              <p class="text-gray-600 mb-4">
                Connectify moderates reviews to ensure compliance with our guidelines. Reviews that do not meet our standards may be removed or flagged for revision. Repeat violations may result in restrictions to your review privileges or account access.
              </p>
              
              <p class="text-gray-600">
                We encourage business owners and service providers to respond to reviews professionally and constructively. Direct engagement with reviewers can provide additional context and demonstrate a commitment to customer satisfaction.
              </p>
            </div>
          </div>
        </section>

        <!-- Code of Conduct Section -->
        <section id="conduct" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-users text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Code of Conduct</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                Our Code of Conduct establishes standards for respectful and constructive interaction within the Connectify community. By using our platform, you agree to abide by these community standards.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Community Values</h3>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <i class="fas fa-comment-dots text-indigo-600"></i>
                  </div>
                  <h4 class="font-medium mb-3">Respectful Communication</h4>
                  <p class="text-gray-600 text-sm">
                    Treat others with respect and courtesy, even when expressing disagreement. Focus on ideas rather than attacking individuals.
                  </p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <i class="fas fa-hands-helping text-indigo-600"></i>
                  </div>
                  <h4 class="font-medium mb-3">Constructive Contribution</h4>
                  <p class="text-gray-600 text-sm">
                    Aim to add value through your interactions, whether sharing information, providing feedback, or offering assistance to others.
                  </p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="h-12 w-12 rounded-full bg-indigo-100 flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-indigo-600"></i>
                  </div>
                  <h4 class="font-medium mb-3">Safety & Inclusivity</h4>
                  <p class="text-gray-600 text-sm">
                    Help maintain a safe and inclusive environment where all users feel welcome regardless of their background or identity.
                  </p>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Prohibited Conduct</h3>
              <p class="text-gray-600 mb-4">
                The following behaviors are prohibited on our platform and may result in content removal, account restrictions, or termination:
              </p>
              
              <div class="bg-gray-50 rounded-lg p-5 mb-6">
                <ul class="text-gray-600 space-y-4">
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-red-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-times text-red-600 text-xs"></i>
                    </div>
                    <div>
                      <p class="font-medium">Harassment & Bullying</p>
                      <p class="text-sm">Targeting others with persistent unwanted contact, threats, intimidation, or abusive behavior.</p>
                    </div>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-red-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-times text-red-600 text-xs"></i>
                    </div>
                    <div>
                      <p class="font-medium">Hate Speech</p>
                      <p class="text-sm">Content that promotes or condones violence or discrimination based on race, ethnicity, religion, gender, sexual orientation, disability, or other protected characteristics.</p>
                    </div>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-red-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-times text-red-600 text-xs"></i>
                    </div>
                    <div>
                      <p class="font-medium">Misinformation</p>
                      <p class="text-sm">Deliberately spreading false information that could cause harm, particularly regarding public health, safety, or election integrity.</p>
                    </div>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-red-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-times text-red-600 text-xs"></i>
                    </div>
                    <div>
                      <p class="font-medium">Impersonation</p>
                      <p class="text-sm">Pretending to be another person, organization, or Connectify employee with the intent to confuse, deceive, or manipulate others.</p>
                    </div>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-red-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-times text-red-600 text-xs"></i>
                    </div>
                    <div>
                      <p class="font-medium">Spam & Commercial Abuse</p>
                      <p class="text-sm">Excessive promotion, unsolicited commercial messages, or manipulative engagement practices designed to artificially boost visibility.</p>
                    </div>
                  </li>
                </ul>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Reporting Violations</h3>
              <p class="text-gray-600 mb-4">
                If you encounter content or behavior that violates our Code of Conduct, please report it immediately using our reporting tools. Our moderation team reviews reports and takes appropriate action to maintain community standards.
              </p>
              
              <div class="bg-indigo-50 rounded-lg p-5">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-balance-scale text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Enforcement Approach</h4>
                    <p class="text-sm text-gray-600">
                      We take a balanced approach to enforcement that considers context, intent, and severity of violations. First-time or minor violations may receive warnings, while serious or repeated violations may result in immediate account suspension or termination.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Intellectual Property Section -->
        <section id="intellectual" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-copyright text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Intellectual Property Rights</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                This section outlines the intellectual property rights related to our platform and content shared on Connectify, including how we protect our own IP and respect the IP rights of others.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Connectify's Intellectual Property</h3>
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <p class="text-gray-600 mb-4">
                  The Connectify platform, including its design, features, functionality, and content created by Connectify (such as text, graphics, logos, button icons, images, and audio clips), is owned by Connectify and is protected by copyright, trademark, and other intellectual property laws.
                </p>
                <p class="text-gray-600">
                  You may not copy, modify, create derivative works from, reverse engineer, decompile, or otherwise attempt to extract the source code of our software or reproduce any elements of our proprietary design, layout, or content without our explicit permission.
                </p>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Third-Party Intellectual Property</h3>
              <p class="text-gray-600 mb-4">
                Connectify respects the intellectual property rights of others and expects our users to do the same. You may not upload, share, or otherwise make available any content that infringes on another party's intellectual property rights.
              </p>
              
              <div class="timeline-container mt-8 mb-6">
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Copyright</h4>
                    <p class="text-gray-600">
                      Do not share copyrighted material without permission from the copyright holder or a valid legal basis such as fair use. This includes images, videos, music, articles, books, and software.
                    </p>
                  </div>
                </div>
                
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Trademarks</h4>
                    <p class="text-gray-600">
                      Respect trademark rights when referring to branded products or services. Do not use trademarks in ways that suggest endorsement or affiliation without permission.
                    </p>
                  </div>
                </div>
                
                <div class="timeline-item">
                  <div class="timeline-dot"></div>
                  <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                    <h4 class="font-medium mb-2">Patents</h4>
                    <p class="text-gray-600">
                      Avoid sharing content that encourages or instructs others on how to infringe upon patented inventions, processes, or methods.
                    </p>
                  </div>
                </div>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">DMCA Notice & Takedown Procedure</h3>
              <p class="text-gray-600 mb-4">
                If you believe your intellectual property rights have been infringed by content on our platform, you may submit a notice under the Digital Millennium Copyright Act (DMCA). We process valid DMCA notices and remove infringing content in accordance with applicable law.
              </p>
              
              <div class="bg-indigo-50 rounded-lg p-5">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Reporting IP Violations</h4>
                    <p class="text-sm text-gray-600 mb-3">
                      To report copyright or trademark infringement, please send a detailed notice to our designated agent at <a href="mailto:ip@connectify.com" class="text-indigo-600 hover:text-indigo-800">ip@connectify.com</a> including:
                    </p>
                    <ul class="text-sm text-gray-600 space-y-1 list-disc pl-5">
                      <li>Identification of the copyrighted/trademarked work claimed to be infringed</li>
                      <li>Identification of the allegedly infringing content and its location</li>
                      <li>Your contact information</li>
                      <li>A statement of good faith belief that the use is not authorized</li>
                      <li>A statement under penalty of perjury that the information is accurate</li>
                      <li>A physical or electronic signature of the rights holder or authorized agent</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Termination Section -->
        <section id="termination" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-ban text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Termination</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                This section outlines the circumstances under which your access to Connectify may be terminated and the consequences of such termination.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Account Termination by Connectify</h3>
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <p class="text-gray-600 mb-4">
                  We reserve the right to suspend or terminate your account and access to our services if:
                </p>
                <ul class="text-gray-600 space-y-3">
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-exclamation text-indigo-600 text-xs"></i>
                    </div>
                    <p>You materially or repeatedly breach these Terms of Service</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-exclamation text-indigo-600 text-xs"></i>
                    </div>
                    <p>We have a reasonable belief that your use of our platform poses a security risk</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-exclamation text-indigo-600 text-xs"></i>
                    </div>
                    <p>Your account has been inactive for an extended period</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-exclamation text-indigo-600 text-xs"></i>
                    </div>
                    <p>We are required to do so by applicable law or legal process</p>
                  </li>
                  <li class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-indigo-100 flex items-center justify-center mr-3 mt-0.5">
                      <i class="fas fa-exclamation text-indigo-600 text-xs"></i>
                    </div>
                    <p>Your continued use could cause legal liability for Connectify or our users</p>
                  </li>
                </ul>
              </div>
              
              <h3 class="font-semibold text-xl mb-4">Termination by You</h3>
              <p class="text-gray-600 mb-4">
                You may terminate your account at any time by following the account deletion process in your account settings. Please note that some information may remain in our systems even after account deletion in accordance with our Privacy Policy and applicable laws.
              </p>
              
              <h3 class="font-semibold text-xl mb-4">Effects of Termination</h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-user-slash text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Account Access</h4>
                  </div>
                  <p class="text-gray-600 text-sm">
                    Upon termination, your account access will be revoked immediately. You will no longer be able to log in, post content, or interact with other users on the platform.
                  </p>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-5 card-hover-effect">
                  <div class="flex items-center mb-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                      <i class="fas fa-file-archive text-indigo-600"></i>
                    </div>
                    <h4 class="font-medium">Content Retention</h4>
                  </div>
                  <p class="text-gray-600 text-sm">
                    After termination, your content may remain visible to others unless you have deleted it prior to account termination. Content may be retained in our backups and archives as required by law.
                  </p>
                </div>
              </div>
              
              <div class="bg-indigo-50 rounded-lg p-5">
                <div class="flex items-start">
                  <div class="rounded-full bg-indigo-100 p-3 mr-4 flex-shrink-0">
                    <i class="fas fa-redo text-indigo-600"></i>
                  </div>
                  <div>
                    <h4 class="font-medium mb-2">Account Reactivation</h4>
                    <p class="text-sm text-gray-600">
                      If your account was terminated by Connectify, you may submit an appeal for reconsideration through our support channels. Account reactivation is at our sole discretion and not guaranteed. If you terminated your own account, you may be able to create a new account, subject to these Terms of Service.
                    </p>
                  </div>
                </div>
              </div>
              
              <p class="text-gray-600 mt-6">
                The provisions of these Terms of Service that by their nature should survive termination will survive, including ownership provisions, warranty disclaimers, indemnity, limitations of liability, and dispute resolution provisions.
              </p>
            </div>
          </div>
        </section>

        <!-- Limitation of Liability Section -->
        <section id="liability" class="mb-12 scroll-mt-28">
          <div class="bg-white rounded-xl shadow-custom p-6 md:p-8">
            <div class="flex items-center mb-6">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-gavel text-white"></i>
              </div>
              <h2 class="text-2xl md:text-3xl font-bold">Limitation of Liability</h2>
            </div>
            
            <div class="prose max-w-none">
              <p class="text-gray-600 mb-6">
                This section explains the extent and limitations of our legal liability to you as a user of our platform.
              </p>
              
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <h3 class="font-semibold text-xl mb-4">Disclaimer of Warranties</h3>
                <p class="text-gray-600 mb-4">
                  THE CONNECTIFY PLATFORM AND ALL CONTENT, FEATURES, AND SERVICES PROVIDED THROUGH IT ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED.
                </p>
                <p class="text-gray-600">
                  CONNECTIFY SPECIFICALLY DISCLAIMS ANY AND ALL WARRANTIES AND CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF THE COURSE OF DEALING OR USAGE OF TRADE.
                </p>
              </div>
              
              <div class="bg-gray-50 rounded-lg p-5 mb-6 card-hover-effect">
                <h3 class="font-semibold text-xl mb-4">Limitation of Liability</h3>
                <p class="text-gray-600 mb-4">
                  TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, CONNECTIFY AND ITS OFFICERS, EMPLOYEES, AGENTS, PARTNERS, AND LICENSORS WILL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING WITHOUT LIMITATION, LOSS OF PROFITS, DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES, RESULTING FROM:
                </p>
                <ul class="text-gray-600 space-y-3">