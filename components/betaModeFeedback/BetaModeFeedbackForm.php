  <?php  
 
 session_start();
 if (!(isset($_SESSION['LoggedIN']) && $_SESSION['LoggedIN'] === true)) {
     $_SESSION['error_message'] = "Please log in to access this page.";
     header('location:../../home.php');
     exit;
 }
 
?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Postly Beta Feedback</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <style>
        svg {
            width: 80px;
            height: 80px;
        }

        /* Loader styles */
    #loaderContainer {
        transition: opacity 0.3s ease;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .loader-content {
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .loader-content p {
        margin-top: 1.5rem;
        font-size: 1.1rem;
        color: #4b5563;
    }
      </style>
      <link rel="stylesheet" href="../../scripts/css/betaFeedbackForm.css">
  </head>

  <body>


      <div class="container">

          <div class="feedback-wrapper">
              <!-- Background elements -->
              <div class="futuristic-circle circle-1"></div>
              <div class="futuristic-circle circle-2"></div>
              <div class="futuristic-circle circle-3"></div>
              <div class="grid-pattern"></div>

              <!-- Header -->
              <header class="header">
                  <div class="logo">
                      <div class="logo-icon">
                          <img class="h-12 filter drop-shadow-lg" src="../../newlogo2.png" alt="">
                      </div>
                      <span>Postly</span>
                  </div>
                  <div class="beta-label">Beta</div>
              </header>







              <!-- Toast Container (fixed top right) -->
              <div class="fixed top-4 right-4 z-50 space-y-2" id="toast-container">
                  <!-- Success Toast (PHP echo if message exists) -->
                  <?php if (!empty($_SESSION['success_message'])): ?>
                  <div class="flex items-center w-full max-w-sm p-4 text-green-800 bg-green-100 border border-green-300 rounded-lg shadow animate-slide-in-right"
                      role="alert">
                      <svg class="flex-shrink-0 w-5 h-5 mr-2 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                              d="M16.707 5.293a1 1 0 010 1.414L9 14.414 5.293 10.707a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z"
                              clip-rule="evenodd" />
                      </svg>
                      <span class="text-sm font-medium"><?= $_SESSION['success_message'] ?></span>
                  </div>
                  <?php unset($_SESSION['success_message']); ?>
                  <?php endif; ?>

                  <!-- Error Toast -->
                  <?php if (!empty($_SESSION['error_message'])): ?>
                  <div class="flex items-center w-full max-w-sm p-4 text-red-800 bg-red-100 border border-red-300 rounded-lg shadow animate-slide-in-right"
                      role="alert">
                      <svg class="flex-shrink-0 w-5 h-5 mr-2 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                              d="M8.257 3.099c.366-.446.957-.5 1.414 0l7 8a1 1 0 01-.293 1.414l-7 7a1 1 0 01-1.414 0l-7-7a1 1 0 01.293-1.414l7-8z"
                              clip-rule="evenodd" />
                      </svg>
                      <span class="text-sm font-medium"><?= $_SESSION['error_message'] ?></span>
                  </div>
                  <?php unset($_SESSION['error_message']); ?>
                  <?php endif; ?>
              </div>




              <!-- Main card -->
              <div class="card">
                  <div class="card-header">
                      <h2>Help Shape Postly</h2>
                      <p>Your feedback on our social review platform will help us build a better community</p>
                  </div>
                  <div class="card-body">
                      <form id="feedbackForm" action="../../handlers/betaModeFeedback/handleBetafeedbackForm.php"
                          method="POST" enctype="multipart/form-data">
                          <!-- Rating section -->
                          <div class="form-group">
                              <label class="form-label">How would you rate your experience with Postly so
                                  far?</label>
                              <div class="rating-container">
                                  <div class="rating-group">
                                      <input type="radio" name="rating" id="rating1" class="rating-input" value="Poor">
                                      <label for="rating1" class="rating-label">😞</label>
                                      <div class="rating-text">Poor</div>
                                  </div>
                                  <div class="rating-group">
                                      <input type="radio" name="rating" id="rating2" class="rating-input" value="fair">
                                      <label for="rating2" class="rating-label">😐</label>
                                      <div class="rating-text">Fair</div>
                                  </div>
                                  <div class="rating-group">
                                      <input type="radio" name="rating" id="rating3" class="rating-input" value="Good">
                                      <label for="rating3" class="rating-label">🙂</label>
                                      <div class="rating-text">Good</div>
                                  </div>
                                  <div class="rating-group">
                                      <input type="radio" name="rating" id="rating4" class="rating-input" value="Great"
                                          checked>
                                      <label for="rating4" class="rating-label">😃</label>
                                      <div class="rating-text">Great</div>
                                  </div>
                                  <div class="rating-group">
                                      <input type="radio" name="rating" id="rating5" class="rating-input"
                                          value="Excellent">
                                      <label for="rating5" class="rating-label">🤩</label>
                                      <div class="rating-text">Excellent</div>
                                  </div>
                              </div>
                          </div>

                          <!-- NPS -->
                          <div class="form-group">
                              <label class="form-label">How likely are you to recommend Postly to other content
                                  creators?</label>
                              <div class="nps-container">
                                  <div class="nps-scale flex gap-2">
                                      <!-- Radio buttons from 0 to 10 -->
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="0"> 0
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="1"> 1
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="2"> 2
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="3"> 3
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="4"> 4
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="5"> 5
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="6"> 6
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="7"> 7
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="8" checked> 8
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="9"> 9
                                      </label>
                                      <label class="nps-number">
                                          <input type="radio" name="rate" value="10"> 10
                                      </label>
                                  </div>
                                  <div class="nps-labels flex justify-between mt-2 text-sm text-gray-600">
                                      <span>Not likely</span>
                                      <span>Very likely</span>
                                  </div>
                              </div>

                          </div>



                          <!-- Feedback comments -->
                          <div class="form-group">
                              <label class="form-label">What would make Postly the ultimate platform for sharing
                                  reviews?</label>
                              <textarea class="form-input" placeholder="Share your ideas, suggestions, or concerns..."
                                  name="suggestion"></textarea>
                          </div>

                          <!-- Screenshot upload -->
                          <div class="form-group">
                              <label class="form-label">Share screenshots of issues or ideas (optional)</label>
                              <div class="file-upload">
                                  <input type="file" name="screenshot" class="file-upload-input" id="screenshot"
                                      accept="image/*">
                                  <label for="screenshot" class="file-upload-label">
                                      <span class="file-upload-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                                      <span>Drag & drop files here or click to browse</span>
                                  </label>
                              </div>
                          </div>



                          <!-- Submit button -->
                          <div class="form-group" style="margin-top: 2rem;">
                              <button type="submit" class="button button-full pulse">
                                  Submit Feedback
                                  <span class="button-icon"><i class="fas fa-paper-plane"></i></span>
                              </button>
                          </div>



                      </form>
                  </div>
              </div>



              <!-- Footer -->
              <footer class="footer" id="footer">
                  <p>© 2025 Postly • Help us build the best review community</p>
                  <div class="social-links">
                      <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                  </div>
              </footer>
          </div>
      </div>

      <div id="loaderContainer" style="display: none; justify-content: center; align-items: center; height: 100px;">
          <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
              <defs>

                  <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#9442E8" />
                      <stop offset="100%" stop-color="#24A9E7" />
                  </linearGradient>


                  <linearGradient id="pinkArrowGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" stop-color="#FF41A9" />
                      <stop offset="100%" stop-color="#FF65C5" />
                  </linearGradient>

                  <linearGradient id="purpleArrowGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" stop-color="#9A5DE8" />
                      <stop offset="100%" stop-color="#7C74EB" />
                  </linearGradient>

                  <linearGradient id="blueArrowGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" stop-color="#4EBEF7" />
                      <stop offset="100%" stop-color="#3090F2" />
                  </linearGradient>


                  <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
                      <feGaussianBlur stdDeviation="2" result="blur" />
                      <feComposite in="SourceGraphic" in2="blur" operator="over" />
                  </filter>
              </defs>


              <g id="loadingPulse">
                  <rect x="85" y="85" width="130" height="130" rx="30" ry="30" fill="none" stroke="white"
                      stroke-width="2" opacity="0.5">
                      <animate attributeName="width" values="130;150;130" dur="2s" repeatCount="indefinite" />
                      <animate attributeName="height" values="130;150;130" dur="2s" repeatCount="indefinite" />
                      <animate attributeName="x" values="85;75;85" dur="2s" repeatCount="indefinite" />
                      <animate attributeName="y" values="85;75;85" dur="2s" repeatCount="indefinite" />
                      <animate attributeName="opacity" values="0;0.5;0" dur="2s" repeatCount="indefinite" />
                  </rect>
              </g>


              <g id="exactLogo">

                  <rect x="90" y="90" width="120" height="120" rx="28" ry="28" fill="white" />


                  <rect x="95" y="95" width="110" height="110" rx="24" ry="24" fill="url(#bgGradient)" />


                  <rect x="110" y="170" width="55" height="12" rx="6" ry="6" fill="url(#pinkArrowGradient)">
                      <animate attributeName="transform" type="translate" values="0,0; -5,0; 0,0" dur="1.5s"
                          repeatCount="indefinite" />
                      <animate attributeName="opacity" values="0.8;1;0.8" dur="1.5s" repeatCount="indefinite" />
                  </rect>

                  <rect x="120" y="150" width="65" height="12" rx="6" ry="6" fill="url(#purpleArrowGradient)">
                      <animate attributeName="transform" type="translate" values="0,0; -5,0; 0,0" dur="1.5s"
                          begin="0.2s" repeatCount="indefinite" />
                      <animate attributeName="opacity" values="0.8;1;0.8" dur="1.5s" begin="0.2s"
                          repeatCount="indefinite" />
                  </rect>


                  <rect x="130" y="130" width="45" height="12" rx="6" ry="6" fill="url(#blueArrowGradient)">
                      <animate attributeName="transform" type="translate" values="0,0; -5,0; 0,0" dur="1.5s"
                          begin="0.4s" repeatCount="indefinite" />
                      <animate attributeName="opacity" values="0.8;1;0.8" dur="1.5s" begin="0.4s"
                          repeatCount="indefinite" />
                  </rect>

                  <path d="M175,115 L195,140 L175,140 Z" fill="white">
                      <animate attributeName="transform" type="translate" values="0,0; 5,0; 0,0" dur="1.5s" begin="0.6s"
                          repeatCount="indefinite" />
                      <animate attributeName="opacity" values="0.9;1;0.9" dur="1.5s" begin="0.6s"
                          repeatCount="indefinite" />
                  </path>


                  <g id="speedLines" filter="url(#glow)">

                      <line x1="85" y1="170" x2="65" y2="170" stroke="#24A9E7" stroke-width="3" stroke-linecap="round">
                          <animate attributeName="x2" values="65;45;65" dur="1s" repeatCount="indefinite" />
                          <animate attributeName="opacity" values="0;1;0" dur="1s" repeatCount="indefinite" />
                      </line>


                      <line x1="85" y1="155" x2="60" y2="155" stroke="#24A9E7" stroke-width="3" stroke-linecap="round">
                          <animate attributeName="x2" values="60;35;60" dur="1s" begin="0.2s"
                              repeatCount="indefinite" />
                          <animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.2s"
                              repeatCount="indefinite" />
                      </line>


                      <line x1="85" y1="140" x2="55" y2="140" stroke="#24A9E7" stroke-width="3" stroke-linecap="round">
                          <animate attributeName="x2" values="55;25;55" dur="1s" begin="0.4s"
                              repeatCount="indefinite" />
                          <animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.4s"
                              repeatCount="indefinite" />
                      </line>

                      <line x1="85" y1="125" x2="60" y2="125" stroke="#24A9E7" stroke-width="3" stroke-linecap="round">
                          <animate attributeName="x2" values="60;35;60" dur="1s" begin="0.6s"
                              repeatCount="indefinite" />
                          <animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.6s"
                              repeatCount="indefinite" />
                      </line>


                      <line x1="85" y1="110" x2="65" y2="110" stroke="#24A9E7" stroke-width="3" stroke-linecap="round">
                          <animate attributeName="x2" values="65;45;65" dur="1s" begin="0.8s"
                              repeatCount="indefinite" />
                          <animate attributeName="opacity" values="0;1;0" dur="1s" begin="0.8s"
                              repeatCount="indefinite" />
                      </line>
                  </g>
              </g>

              <g id="spinnerElement">
                  <path d="M150,50 A100,100 0 0,1 250,150" fill="none" stroke="white" stroke-width="3"
                      stroke-linecap="round" opacity="0.7">
                      <animateTransform attributeName="transform" type="rotate" from="0 150 150" to="360 150 150"
                          dur="2s" repeatCount="indefinite" />
                  </path>
              </g>


              <circle cx="150" cy="150" r="5" fill="white" opacity="0.7">
                  <animate attributeName="r" values="5;8;5" dur="1.5s" repeatCount="indefinite" />
                  <animate attributeName="opacity" values="0.7;1;0.7" dur="1.5s" repeatCount="indefinite" />
              </circle>
          </svg>
      </div>



      <!-- <script src="../scripts/betaFeedbackForm.js">
      </script> -->

      
        <script>
        document.getElementById('feedbackForm').addEventListener('submit', function(e) {
            // Show loader
            document.getElementById('loaderContainer').style.display = 'flex';
            
            // Optional: Disable the submit button to prevent multiple submissions
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = 'Submitting... <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
            
    // The form will continue to submit normally
    // The loader will disappear when the page reloads or redirects
});

// If you want to handle AJAX submission instead:
/*
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show loader
    document.getElementById('loaderContainer').style.display = 'flex';
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.innerHTML = 'Submitting... <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
    
    fetch(this.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Hide loader
        document.getElementById('loaderContainer').style.display = 'none';
        
        if(data.success) {
            // Show success message or redirect
            window.location.href = data.redirect || window.location.href;
        } else {
            // Show error message
            submitButton.disabled = false;
            submitButton.innerHTML = 'Submit Feedback <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
            alert(data.message || 'An error occurred');
        }
    })
    .catch(error => {
        document.getElementById('loaderContainer').style.display = 'none';
        submitButton.disabled = false;
        submitButton.innerHTML = 'Submit Feedback <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
        console.error('Error:', error);
    });
});
*/
</script>
     
  </body>

  </html>