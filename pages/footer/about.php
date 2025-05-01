<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Connectify - The Next Social Experience</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../scripts/css/about.style.css">
</head>
<body class="bg-gray-50 text-gray-800">
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
              <a href="about.php" class="border-b-2 border-indigo-500 text-indigo-600 px-3 py-2 text-sm font-medium">About</a>
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
          <a href="about.php" class="text-indigo-600 bg-indigo-50 block px-3 py-2 text-base font-medium">About</a>
          <a href="features.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Features</a>
          <a href="pricing.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Pricing</a>
          <a href="contact.php" class="text-gray-500 hover:text-indigo-600 block px-3 py-2 text-base font-medium">Contact</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="pt-32 pb-20 md:pt-40 md:pb-28 relative overflow-hidden">
    <div class="circle-bg bg-purple-100 w-96 h-96 -top-20 -left-20 opacity-70"></div>
    <div class="circle-bg bg-blue-100 w-64 h-64 top-1/4 right-10 opacity-60"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
          Reimagining <span class="text-gradient">social connections</span> for the digital age
        </h1>
        <p class="text-lg text-gray-600 mb-8">
          We're on a mission to create a platform where authentic connections thrive, creativity is celebrated, and communities flourish in a positive digital environment.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="#our-story" class="px-8 py-3 bg-gradient-custom text-white font-medium rounded-full hover:opacity-90 transition-all duration-300 shadow-lg">
            Our Story
          </a>
          <a href="#our-team" class="px-8 py-3 border border-indigo-500 text-indigo-600 font-medium rounded-full hover:bg-indigo-50 transition-all duration-300">
            Meet Our Team
          </a>
        </div>
      </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-gray-50 to-transparent"></div>
  </section>

  <!-- Company Stats -->
  <section class="py-12 bg-gradient-soft">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
          <h3 class="text-4xl font-bold text-indigo-600 mb-2">10M+</h3>
          <p class="text-gray-600">Active Users</p>
        </div>
        <div>
          <h3 class="text-4xl font-bold text-indigo-600 mb-2">150+</h3>
          <p class="text-gray-600">Countries</p>
        </div>
        <div>
          <h3 class="text-4xl font-bold text-indigo-600 mb-2">200K+</h3>
          <p class="text-gray-600">Communities</p>
        </div>
        <div>
          <h3 class="text-4xl font-bold text-indigo-600 mb-2">99.9%</h3>
          <p class="text-gray-600">Uptime</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Section -->
  <section id="our-story" class="py-20 relative overflow-hidden">
    <div class="circle-bg bg-pink-100 w-80 h-80 -bottom-40 -right-20 opacity-60"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="w-full md:w-1/2">
          <div class="relative">
            <div class="bg-gradient-custom absolute -inset-4 rounded-tr-3xl rounded-bl-3xl blur-lg opacity-20"></div>
            <img src="/api/placeholder/600/400" alt="Team working together" class="relative rounded-tr-3xl rounded-bl-3xl shadow-custom w-full h-full object-cover" />
            <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white rounded-full shadow-lg flex items-center justify-center">
              <div class="text-gradient font-bold text-xl">2019</div>
            </div>
          </div>
        </div>
        
        <div class="w-full md:w-1/2">
          <h2 class="text-3xl font-bold mb-6">Our Story</h2>
          <div class="space-y-4 text-gray-600">
            <p>
              Connectify was born in 2019 when our founders, a diverse group of tech enthusiasts, designers, and social scientists, came together with a shared vision: to create a more authentic and meaningful digital social experience.
            </p>
            <p>
              Frustrated by the superficial nature of existing platforms and concerned about their impact on mental health, we set out to build something different—a platform that prioritizes real connections over vanity metrics, fosters genuine communities, and puts user wellbeing at its core.
            </p>
            <p>
              Our journey began with extensive research and community feedback, iterating and refining our approach based on what people truly wanted from their social media experience. Today, we're proud to have created a platform where millions of users find value, connection, and joy every day.
            </p>
          </div>
          
          <div class="mt-8 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
            <div class="flex items-center">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-users text-white"></i>
              </div>
              <div>
                <h4 class="font-medium">Community First</h4>
                <p class="text-sm text-gray-500">Built with user feedback</p>
              </div>
            </div>
            <div class="flex items-center">
              <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
                <i class="fas fa-shield-alt text-white"></i>
              </div>
              <div>
                <h4 class="font-medium">Safety Focused</h4>
                <p class="text-sm text-gray-500">Privacy by design</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Values -->
  <section class="py-20 bg-gradient-custom text-white relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-16 bg-gradient-to-b from-gray-50 to-transparent"></div>
    <div class="absolute inset-0 opacity-10">
      <div class="absolute top-0 left-0 w-full h-full bg-pattern"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-bold mb-6">Our Mission & Values</h2>
        <p class="text-white text-opacity-80">
          Guided by a strong set of principles, we're building a platform where digital interactions enhance real-life connections rather than replace them.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-heart text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Authentic Connections</h3>
          <p class="text-white text-opacity-80">
            We believe social media should bring people genuinely closer together, not create artificial divisions or competition for attention.
          </p>
        </div>
        
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-shield-alt text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Safety & Wellbeing</h3>
          <p class="text-white text-opacity-80">
            User safety and mental wellbeing are our top priorities. We design features that promote positive interactions and minimize harmful content.
          </p>
        </div>
        
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-users text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Inclusive Community</h3>
          <p class="text-white text-opacity-80">
            We're committed to building a platform where everyone feels welcome, represented, and able to participate in meaningful ways.
          </p>
        </div>
        
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-lock text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Privacy & Control</h3>
          <p class="text-white text-opacity-80">
            Users should own their data and have transparent control over how it's used. We never compromise on privacy for profit.
          </p>
        </div>
        
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-palette text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Creative Expression</h3>
          <p class="text-white text-opacity-80">
            We provide tools that empower people to express themselves authentically and creatively without algorithm-driven constraints.
          </p>
        </div>
        
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-6 border border-white border-opacity-20">
          <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-lightbulb text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Continuous Innovation</h3>
          <p class="text-white text-opacity-80">
            We never stop improving our platform based on research, feedback, and emerging technologies that serve our core mission.
          </p>
        </div>
      </div>
    </div>
    
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-50 to-transparent"></div>
  </section>

  <!-- Meet Our Team -->
  <section id="our-team" class="py-20 relative overflow-hidden">
    <div class="circle-bg bg-indigo-100 w-96 h-96 -bottom-48 -left-48 opacity-70"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-bold mb-6">Meet Our Leadership Team</h2>
        <p class="text-gray-600">
          Passionate experts from diverse backgrounds, united by a shared vision to transform how we connect online.
        </p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Team Member 1 -->
        <div class="bg-white rounded-xl p-6 shadow-custom card-hover">
          <div class="relative mb-6">
            <div class="bg-gradient-custom absolute inset-0 rounded-xl opacity-10"></div>
            <img src="/api/placeholder/300/300" alt="Sarah Johnson" class="w-full h-64 object-cover rounded-xl" />
          </div>
          <h3 class="text-xl font-semibold mb-1">Sarah Johnson</h3>
          <p class="text-indigo-600 mb-3">CEO & Co-Founder</p>
          <p class="text-gray-600 text-sm mb-4">Former tech executive with a background in cognitive psychology, passionate about ethical technology.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
        
        <!-- Team Member 2 -->
        <div class="bg-white rounded-xl p-6 shadow-custom card-hover">
          <div class="relative mb-6">
            <div class="bg-gradient-custom absolute inset-0 rounded-xl opacity-10"></div>
            <img src="/api/placeholder/300/300" alt="Michael Chen" class="w-full h-64 object-cover rounded-xl" />
          </div>
          <h3 class="text-xl font-semibold mb-1">Michael Chen</h3>
          <p class="text-indigo-600 mb-3">CTO & Co-Founder</p>
          <p class="text-gray-600 text-sm mb-4">AI and infrastructure specialist with previous experience at leading tech companies and research labs.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        
        <!-- Team Member 3 -->
        <div class="bg-white rounded-xl p-6 shadow-custom card-hover">
          <div class="relative mb-6">
            <div class="bg-gradient-custom absolute inset-0 rounded-xl opacity-10"></div>
            <img src="/api/placeholder/300/300" alt="Elena Rodriguez" class="w-full h-64 object-cover rounded-xl" />
          </div>
          <h3 class="text-xl font-semibold mb-1">Elena Rodriguez</h3>
          <p class="text-indigo-600 mb-3">Head of Design</p>
          <p class="text-gray-600 text-sm mb-4">Award-winning UX/UI designer with a focus on creating inclusive, accessible digital experiences.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-dribbble"></i>
            </a>
          </div>
        </div>
        
        <!-- Team Member 4 -->
        <div class="bg-white rounded-xl p-6 shadow-custom card-hover">
          <div class="relative mb-6">
            <div class="bg-gradient-custom absolute inset-0 rounded-xl opacity-10"></div>
            <img src="/api/placeholder/300/300" alt="Jamal Williams" class="w-full h-64 object-cover rounded-xl" />
          </div>
          <h3 class="text-xl font-semibold mb-1">Jamal Williams</h3>
          <p class="text-indigo-600 mb-3">Chief Trust & Safety Officer</p>
          <p class="text-gray-600 text-sm mb-4">Former policy advisor with expertise in digital ethics, online safety, and community governance.</p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-indigo-600 transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="mt-16 text-center">
        <a href="careers.php" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors">
          <span>Join Our Team — View Open Positions</span>
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Platform Features -->
  <section class="py-20 bg-gradient-soft relative overflow-hidden">
    <div class="circle-bg bg-blue-100 w-64 h-64 top-20 left-10 opacity-60"></div>
    <div class="circle-bg bg-pink-100 w-80 h-80 bottom-20 right-10 opacity-60"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-bold mb-6">What Makes Connectify Different</h2>
        <p class="text-gray-600">
          We've reimagined what social media can be by focusing on what really matters: meaningful connections, user wellbeing, and authentic expression.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-comments text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Interest-Based Communities</h3>
          <p class="text-gray-600">
            Find your people through our vibrant, interest-based communities where meaningful discussions flourish around shared passions.
          </p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-brain text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Wellbeing-Focused Design</h3>
          <p class="text-gray-600">
            Our platform is designed to promote healthy usage patterns with mindful engagement features and absence of addictive mechanisms.
          </p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-shield-alt text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Advanced Privacy Controls</h3>
          <p class="text-gray-600">
            Granular privacy settings put you in control of your data, with transparent policies and user-friendly controls.
          </p>
        </div>
        
        <!-- Feature 4 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-paint-brush text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Creative Tools</h3>
          <p class="text-gray-600">
            Express yourself with our suite of innovative content creation tools designed for authentic creative expression.
          </p>
        </div>
        
        <!-- Feature 5 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-robot text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Ethical AI</h3>
          <p class="text-gray-600">
            Our AI systems are designed with transparency and fairness, enhancing experiences without manipulating behavior.
          </p>
        </div>
        
        <!-- Feature 6 -->
        <div class="bg-white rounded-xl p-6 shadow-custom">
          <div class="w-12 h-12 bg-gradient-custom rounded-full flex items-center justify-center mb-4">
            <i class="fas fa-seedling text-white"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Digital Wellbeing</h3>
          <p class="text-gray-600">
            Features like usage insights, focus mode, and positive interaction reminders help maintain a healthy relationship with technology.
          </p>
        </div>
      </div>
      
      <div class="mt-16 text-center">
        <a href="features.php" class="px-8 py-3 bg-gradient-custom text-white font-medium rounded-full hover:opacity-90 transition-all duration-300 shadow-lg">
          Explore All Features
        </a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-bold mb-6">What Our Users Say</h2>
        <p class="text-gray-600">
          Real stories from our community about how Connectify has changed their social media experience.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white rounded-xl p-6 shadow-custom relative">
          <div class="absolute top-6 right-6 text-indigo-200 text-5xl opacity-20">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="flex items-center mb-6">
            <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
              <span class="text-white font-bold">J</span>
              </div>
            <div>
              <h4 class="font-medium">Jamie L.</h4>
              <p class="text-sm text-gray-500">Member since 2020</p>
            </div>
          </div>
          <p class="text-gray-600 mb-4">
            "After growing tired of the negativity on other platforms, Connectify has been a breath of fresh air. I've found communities that share my interests without the toxicity, and I actually feel better after spending time here."
          </p>
          <div class="flex items-center">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-sm text-gray-500">5.0</span>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="bg-white rounded-xl p-6 shadow-custom relative">
          <div class="absolute top-6 right-6 text-indigo-200 text-5xl opacity-20">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="flex items-center mb-6">
            <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
              <span class="text-white font-bold">M</span>
            </div>
            <div>
              <h4 class="font-medium">Marcus T.</h4>
              <p class="text-sm text-gray-500">Member since 2021</p>
            </div>
          </div>
          <p class="text-gray-600 mb-4">
            "The creative tools on Connectify have helped me share my art with a supportive community. The feedback has been incredible, and I've collaborated with people I would never have met otherwise."
          </p>
          <div class="flex items-center">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="ml-2 text-sm text-gray-500">4.5</span>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="bg-white rounded-xl p-6 shadow-custom relative">
          <div class="absolute top-6 right-6 text-indigo-200 text-5xl opacity-20">
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="flex items-center mb-6">
            <div class="h-12 w-12 rounded-full bg-gradient-custom flex items-center justify-center mr-4">
              <span class="text-white font-bold">S</span>
            </div>
            <div>
              <h4 class="font-medium">Sarah K.</h4>
              <p class="text-sm text-gray-500">Member since 2019</p>
            </div>
          </div>
          <p class="text-gray-600 mb-4">
            "As a parent, I appreciate how Connectify prioritizes safety and wellbeing. The transparent privacy controls give me peace of mind, and the focus on positive interactions makes this a platform I'm comfortable using with my family."
          </p>
          <div class="flex items-center">
            <div class="text-yellow-400 flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-sm text-gray-500">5.0</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-20 bg-gradient-custom text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Join the Connectify Community</h2>
        <p class="text-white text-opacity-80 mb-8">
          Experience a social platform built on authenticity, creativity, and meaningful connections. Join millions who are already transforming their digital social lives.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="signup.php" class="px-8 py-3 bg-white text-indigo-600 font-medium rounded-full hover:bg-gray-100 transition-colors duration-300 shadow-lg">
            Sign Up Free
          </a>
          <a href="features.php" class="px-8 py-3 border border-white text-white font-medium rounded-full hover:bg-white hover:bg-opacity-10 transition-all duration-300">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
        <div class="lg:col-span-2">
          <div class="flex items-center mb-6">
            <div class="h-10 w-10 rounded-full bg-gradient-custom flex items-center justify-center mr-2">
              <i class="fas fa-network-wired text-white"></i>
            </div>
            <span class="font-bold text-xl">Connectify</span>
          </div>
          <p class="text-gray-400 mb-6">
            Reimagining social connections for the digital age. Join millions in a healthier, more authentic online community.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        
        <div>
          <h3 class="font-semibold text-lg mb-4">Company</h3>
          <ul class="space-y-2 text-gray-400">
            <li><a href="about.php" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="careers.php" class="hover:text-white transition-colors">Careers</a></li>
            <li><a href="press.php" class="hover:text-white transition-colors">Press</a></li>
            <li><a href="blog.php" class="hover:text-white transition-colors">Blog</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="font-semibold text-lg mb-4">Resources</h3>
          <ul class="space-y-2 text-gray-400">
            <li><a href="help.php" class="hover:text-white transition-colors">Help Center</a></li>
            <li><a href="community-guidelines.php" class="hover:text-white transition-colors">Community Guidelines</a></li>
            <li><a href="developers.php" class="hover:text-white transition-colors">Developers</a></li>
            <li><a href="safety.php" class="hover:text-white transition-colors">Safety Center</a></li>
          </ul>
        </div>
        
        <div>
          <h3 class="font-semibold text-lg mb-4">Legal</h3>
          <ul class="space-y-2 text-gray-400">
            <li><a href="terms.php" class="hover:text-white transition-colors">Terms of Service</a></li>
            <li><a href="privacy.php" class="hover:text-white transition-colors">Privacy Policy</a></li>
            <li><a href="cookies.php" class="hover:text-white transition-colors">Cookie Policy</a></li>
            <li><a href="transparency.php" class="hover:text-white transition-colors">Transparency Report</a></li>
          </ul>
        </div>
      </div>
      
      <div class="pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
        <p>&copy; 2025 Connectify Inc. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="./script/about.script.js">

  </script>
</body>
</html>