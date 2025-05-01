<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         
 

    svg {
        width: 90px;
        height: 90px;
    }

    /* Loader styles */
    #loaderContainer {
        transition: opacity 0.3s ease;

        justify-content: center;
        align-items: center;
        height: 100px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        display: none;
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
</head>
<body>
<div id="loaderContainer" >
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
 <script>
        document.getElementById('AddForm').addEventListener('submit', function(e) {
    // Show loader
    document.getElementById('loaderContainer').style.display = 'flex';
    document.getElementById('main').style.pointerEvents = 'none';
    document.getElementById('main').style.opacity = '0.5'; // Optional, to show it's "disabled"

    document.getElementById('header').style.pointerEvents = 'none';
    document.getElementById('header').style.opacity = '0.5';

    document.getElementById('headerTwo').style.pointerEvents = 'none';
    document.getElementById('headerTwo').style.opacity = '0.5';

    
    // Optional: Disable the submit button to prevent multiple submissions
    const submitButton = this.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.innerHTML = 'Submitting... <span class="button-icon"><i class="fas fa-paper-plane"></i></span>';
    
    // The form will continue to submit normally
    // The loader will disappear when the page reloads or redirects
});
 </script>
</body>
</html>