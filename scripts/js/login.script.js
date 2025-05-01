    // Check for error parameter in URL
    // const urlParams = new URLSearchParams(window.location.search);
    // const error = urlParams.get('error');

    // if (error) {
    //     const errorContainer = document.getElementById('error-container');
    //     const errorMessage = document.getElementById('error-message');

    //     errorContainer.classList.remove('hidden');
    //     errorMessage.textContent = decodeURIComponent(error);
    // }


   console.log('hello');
   



    //////////////////////////////////////////////////////////////////////////////////
    // Add this to your CSS file
const styleSheet = document.createElement('style');
styleSheet.textContent = `
  .postly-notification-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1050;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .postly-notification-card {
    background: white;
    border-radius: 16px;
    width: 90%;
    max-width: 420px;
    overflow: hidden;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }

  .postly-notification-visible {
    opacity: 1;
    transform: translateY(0);
  }

  .postly-notification-header {
    padding: 20px 20px 10px;
    text-align: center;
    position: relative;
  }

  .postly-notification-close {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: #f5f5f5;
    color: #666;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
  }

  .postly-notification-close:hover {
    background: #e0e0e0;
  }

  .postly-notification-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 16px;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .postly-notification-title {
    font-size: 22px;
    font-weight: 600;
    color: #202124;
    margin: 0 0 5px;
  }

  .postly-notification-content {
    padding: 0 24px 20px;
    text-align: center;
  }

  .postly-notification-message {
    color: #5f6368;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 24px;
  }

  .postly-notification-actions {
    padding: 16px 24px;
    background: #f8f9fa;
    display: flex;
    justify-content: center;
    gap: 12px;
  }

  .postly-btn {
    padding: 10px 24px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    border: none;
  }

  .postly-btn-primary {
    background: #4285F4;
    color: white;
  }

  .postly-btn-primary:hover {
    background: #3367d6;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
  }

  .postly-btn-secondary {
    background: #f8f9fa;
    color: #4285F4;
    border: 1px solid #dadce0;
  }

  .postly-btn-secondary:hover {
    background: #f1f3f4;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  .pulse {
    animation: pulse 1.5s ease infinite;
  }
`;
document.head.appendChild(styleSheet);

// Main notification function
function showGoogleLoginNotification() {
  // Create overlay
  const overlay = document.createElement('div');
  overlay.className = 'postly-notification-overlay';
  
  // Create notification card
  const card = document.createElement('div');
  card.className = 'postly-notification-card';
  
  // Create content
  card.innerHTML = `
    <div class="postly-notification-header">
      <button class="postly-notification-close">&times;</button>
      <div class="postly-notification-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 17H11V11H13V17ZM13 9H11V7H13V9Z" fill="#4285F4"/>
        </svg>
      </div>
      <h3 class="postly-notification-title">Coming Soon</h3>
    </div>
    <div class="postly-notification-content">
      <p class="postly-notification-message">
        Google sign-in is not available yet. We're working on implementing this feature to make your Postly experience even better.
      </p>
    </div>
    <div class="postly-notification-actions">
      <button class="postly-btn postly-btn-primary">Sign up with Email</button>
      <button class="postly-btn postly-btn-secondary postly-close-btn">Close</button>
    </div>
  `;
  
  // Add to the document
  overlay.appendChild(card);
  document.body.appendChild(overlay);
  
  // Show with animation
  setTimeout(() => {
    overlay.style.opacity = '1';
    card.classList.add('postly-notification-visible');
  }, 10);
  
  // Handle close button clicks
  const closeButtons = card.querySelectorAll('.postly-notification-close, .postly-close-btn');
  closeButtons.forEach(button => {
    button.addEventListener('click', () => {
      overlay.style.opacity = '0';
      card.classList.remove('postly-notification-visible');
      setTimeout(() => {
        document.body.removeChild(overlay);
      }, 300);
    });
  });
  
  // Handle email signup button
  const signupButton = card.querySelector('.postly-btn-primary');
  signupButton.addEventListener('click', () => {
    // Redirect to email signup
    const signupForm = document.querySelector('#email-signup-form');
    if (signupForm) {
      overlay.style.opacity = '0';
      card.classList.remove('postly-notification-visible');
      setTimeout(() => {
        document.body.removeChild(overlay);
        signupForm.scrollIntoView({ behavior: 'smooth' });
        // Add a pulse animation to highlight the form
        signupForm.classList.add('pulse');
        setTimeout(() => {
          signupForm.classList.remove('pulse');
        }, 3000);
      }, 300);
    } else {
      // If no signup form found, just redirect to signup page
      window.location.href = '/signup';
    }
  });
  
  // Close on outside click
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.style.opacity = '0';
      card.classList.remove('postly-notification-visible');
      setTimeout(() => {
        document.body.removeChild(overlay);
      }, 300);
    }
  });
}

// Add event listener to Google login button
document.addEventListener('DOMContentLoaded', function() {
  const googleLoginButton = document.getElementById('google-login-button');
  
  if (googleLoginButton) {
    googleLoginButton.addEventListener('click', function(e) {
      e.preventDefault();
      showGoogleLoginNotification();
    });
  }
});

// Alternative implementation - animated toast notification
function showGoogleToast() {
  // Create toast container if it doesn't exist
  let toastContainer = document.querySelector('.postly-toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'postly-toast-container';
    toastContainer.style.cssText = `
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 1000;
    `;
    document.body.appendChild(toastContainer);
  }
  
  // Create toast
  const toast = document.createElement('div');
  toast.className = 'postly-toast';
  toast.style.cssText = `
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1), 0 15px 35px rgba(66,133,244,0.1);
    padding: 12px;
    margin-top: 12px;
    display: flex;
    align-items: center;
    min-width: 320px;
    max-width: 420px;
    transform: translateX(120%);
    transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border-left: 4px solid #4285F4;
  `;
  
  // Toast content
  toast.innerHTML = `
    <div style="margin-right: 12px; background: rgba(66,133,244,0.1); border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 17H11V11H13V17ZM13 9H11V7H13V9Z" fill="#4285F4"/>
      </svg>
    </div>
    <div style="flex-grow: 1;">
      <h4 style="margin: 0 0 4px; font-size: 16px; color: #202124;">Google Login Unavailable</h4>
      <p style="margin: 0; font-size: 14px; color: #5f6368;">Please use email signup for now. We're working on it!</p>
    </div>
    <button class="postly-toast-close" style="background: none; border: none; color: #5f6368; cursor: pointer; padding: 5px;">
      &times;
    </button>
  `;
  
  // Add toast to container
  toastContainer.appendChild(toast);
  
  // Show toast with animation
  setTimeout(() => {
    toast.style.transform = 'translateX(0)';
  }, 50);
  
  // Set auto-hide timer
  const hideToast = () => {
    toast.style.transform = 'translateX(120%)';
    setTimeout(() => {
      if (toast.parentNode === toastContainer) {
        toastContainer.removeChild(toast);
      }
      // Remove container if empty
      if (toastContainer.children.length === 0) {
        document.body.removeChild(toastContainer);
      }
    }, 400);
  };
  
  // Close button event
  const closeBtn = toast.querySelector('.postly-toast-close');
  closeBtn.addEventListener('click', hideToast);
  
  // Auto-hide after 5 seconds
  setTimeout(hideToast, 5000);
}

// You can use either showGoogleLoginNotification() or showGoogleToast() when the Google button is clicked


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Add this to your CSS file for styled disabled buttons
const appStoreStyleSheet = document.createElement('style');
appStoreStyleSheet.textContent = `
  /* Disabled state styling for app store buttons */
  .app-store-button.disabled {
    position: relative;
    opacity: 0.85;
    cursor: pointer;
  }
  
  .app-store-button.disabled::after {
    content: 'Coming Soon';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.65);
    color: white;
    font-weight: 600;
    font-size: 16px;
    border-radius: inherit;
    opacity: 0;
    transition: opacity 0.2s ease;
  }
  
  .app-store-button.disabled:hover::after {
    opacity: 1;
  }

  /* App store notification styling */
  .postly-app-notification-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1050;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .postly-app-card {
    background: white;
    border-radius: 16px;
    width: 90%;
    max-width: 420px;
    overflow: hidden;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.25);
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }

  .postly-app-card.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  .postly-app-header {
    padding: 24px 24px 0;
    position: relative;
  }
  
  .postly-app-close-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: #f5f5f5;
    color: #666;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
  }
  
  .postly-app-close-btn:hover {
    background: #e0e0e0;
  }
  
  .postly-app-icon-container {
    display: flex;
    align-items: center;
    margin-bottom: 16px;
  }
  
  .postly-app-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(45deg, #4285F4, #34A853);
    border-radius: 16px;
    margin-right: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    font-weight: bold;
  }
  
  .postly-app-info h3 {
    margin: 0 0 4px;
    font-size: 20px;
    color: #202124;
  }
  
  .postly-app-info p {
    margin: 0;
    color: #5f6368;
    font-size: 14px;
  }
  
  .postly-app-content {
    padding: 20px 24px;
  }
  
  .postly-app-content p {
    color: #5f6368;
    font-size: 16px;
    line-height: 1.5;
    margin: 0 0 16px;
  }
  
  .postly-email-form {
    margin-top: 20px;
  }
  
  .postly-email-input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 8px;
    border: 1px solid #dadce0;
    font-size: 16px;
    margin-bottom: 12px;
    box-sizing: border-box;
  }
  
  .postly-app-footer {
    padding: 16px 24px;
    background: #f8f9fa;
    display: flex;
    justify-content: space-between;
  }
  
  .postly-app-btn {
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    border: none;
  }
  
  .postly-app-primary {
    background: #4285F4;
    color: white;
    flex-grow: 1;
  }
  
  .postly-app-primary:hover {
    background: #3367d6;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12);
  }
  
  .postly-app-secondary {
    background: transparent;
    color: #5f6368;
    margin-right: 12px;
  }
  
  .postly-app-secondary:hover {
    background: #f1f3f4;
  }
`;
document.head.appendChild(appStoreStyleSheet);

// Function to show notification when app store buttons are clicked
function showAppNotification(storeType) {
  // Create overlay
  const overlay = document.createElement('div');
  overlay.className = 'postly-app-notification-overlay';
  
  // Create notification card
  const card = document.createElement('div');
  card.className = 'postly-app-card';
  
  // Set content based on store type
  const storeName = storeType === 'play' ? 'Google Play' : 'App Store';
  const storeIcon = storeType === 'play' ? 
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M3.61142 2.35913C3.22484 2.73853 3 3.31954 3 4.05044V19.9496C3 20.6805 3.22485 21.2615 3.61142 21.6409L3.72653 21.7473L13.1926 12.2813V12V11.7187L3.72653 2.25267L3.61142 2.35913Z" fill="white"/><path d="M17.0586 16.1474L13.1926 12.2813V12V11.7187L17.0586 7.85266L17.2014 7.9345L21.7106 10.6302C22.8465 11.2969 22.8465 12.7031 21.7106 13.3698L17.2014 16.0655L17.0586 16.1474Z" fill="white"/><path d="M17.2014 16.0655L13.1926 12.0565L3.61142 21.6409C4.02089 22.0645 4.68428 22.1218 5.4284 21.702L17.2014 16.0655Z" fill="white"/><path d="M3.61142 2.35913C4.02089 1.93551 4.68428 1.9928 5.4284 2.41253L17.2014 8.04905L13.1926 12.0565L3.61142 2.35913Z" fill="white"/></svg>' :
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M15.3499 3C15.4389 3.60425 15.3 4.29 15.03 4.9035C14.76 5.517 14.07 6.0075 13.3949 5.976C13.2905 5.3955 13.485 4.725 13.8 4.08C14.16 3.36 14.835 2.9145 15.3499 3Z" fill="white"/><path d="M18.9299 13.7025C18.9779 16.3785 21.2999 17.373 21.3299 17.3865C21.3149 17.4345 20.9999 18.4815 20.2799 19.563C19.6769 20.469 19.0499 21.375 18.0749 21.3885C17.0999 21.4035 16.7999 20.7885 15.6749 20.7885C14.5499 20.7885 14.2199 21.375 13.3049 21.4035C12.3599 21.432 11.6399 20.4135 11.0219 19.5135C9.75589 17.6715 8.81989 14.1405 10.1249 11.7855C10.7699 10.608 11.9099 9.8595 13.1549 9.8445C14.0999 9.8295 14.9849 10.5135 15.5549 10.5135C16.1249 10.5135 17.1749 9.6885 18.3149 9.8145C18.7349 9.8295 19.9499 10.0005 20.7299 11.127C20.6699 11.169 18.8879 12.231 18.9299 13.7025Z" fill="white"/></svg>';
  
  // Create content
  card.innerHTML = `
    <div class="postly-app-header">
      <button class="postly-app-close-btn">&times;</button>
      <div class="postly-app-icon-container">
        <div class="postly-app-icon">P</div>
        <div class="postly-app-info">
          <h3>Postly</h3>
          <p>Product reviews and feedback</p>
        </div>
      </div>
    </div>
    <div class="postly-app-content">
      <p>Our mobile app is coming soon to ${storeName}! We're working hard to bring the Postly experience to your mobile device.</p>
      <p>Want to be notified when our app launches?</p>
      <div class="postly-email-form">
        <input type="email" class="postly-email-input" placeholder="Your email address" />
      </div>
    </div>
    <div class="postly-app-footer">
      <button class="postly-app-btn postly-app-secondary postly-no-thanks">No thanks</button>
      <button class="postly-app-btn postly-app-primary postly-notify-me">Notify me</button>
    </div>
  `;
  
  // Add to the document
  overlay.appendChild(card);
  document.body.appendChild(overlay);
  
  // Show with animation
  setTimeout(() => {
    overlay.style.opacity = '1';
    card.classList.add('visible');
  }, 10);
  
  // Handle close button clicks
  const closeButton = card.querySelector('.postly-app-close-btn');
  const noThanksButton = card.querySelector('.postly-no-thanks');
  
  const closeModal = () => {
    overlay.style.opacity = '0';
    card.classList.remove('visible');
    setTimeout(() => {
      document.body.removeChild(overlay);
    }, 300);
  };
  
  closeButton.addEventListener('click', closeModal);
  noThanksButton.addEventListener('click', closeModal);
  
  // Handle notify me button
  const notifyButton = card.querySelector('.postly-notify-me');
  const emailInput = card.querySelector('.postly-email-input');
  
  notifyButton.addEventListener('click', () => {
    const email = emailInput.value.trim();
    if (email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      // Here you would normally send this to your backend
      console.log(`Email submitted for ${storeType} app notification: ${email}`);
      
      // Change content to confirmation
      card.querySelector('.postly-app-content').innerHTML = `
        <p style="text-align: center; font-size: 18px;">Thanks! We'll notify you when our app launches on ${storeName}.</p>
        <div style="text-align: center; margin: 20px 0;">
          <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#34A853"/>
          </svg>
        </div>
      `;
      
      card.querySelector('.postly-app-footer').innerHTML = `
        <button class="postly-app-btn postly-app-primary postly-close">Got it</button>
      `;
      
      card.querySelector('.postly-close').addEventListener('click', closeModal);
    } else {
      // Show validation error
      emailInput.style.border = '1px solid #d93025';
      
      const errorMsg = document.createElement('p');
      errorMsg.textContent = 'Please enter a valid email address';
      errorMsg.style.color = '#d93025';
      errorMsg.style.fontSize = '14px';
      errorMsg.style.margin = '8px 0 0';
      
      const existingError = card.querySelector('.error-msg');
      if (!existingError) {
        emailInput.parentNode.appendChild(errorMsg);
        errorMsg.className = 'error-msg';
      }
      
      emailInput.addEventListener('focus', () => {
        emailInput.style.border = '1px solid #dadce0';
        const error = card.querySelector('.error-msg');
        if (error) {
          error.parentNode.removeChild(error);
        }
      });
    }
  });
  
  // Close on outside click
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      closeModal();
    }
  });
}

// Set up event listeners for app store buttons
document.addEventListener('DOMContentLoaded', function() {
  // Find Play Store and App Store buttons
  const playStoreButton = document.getElementById('play-store-button');
  const appStoreButton = document.getElementById('app-store-button');
  
  // Add disabled class to both buttons
  if (playStoreButton) {
    playStoreButton.classList.add('app-store-button', 'disabled');
    playStoreButton.addEventListener('click', function(e) {
      e.preventDefault();
      showAppNotification('play');
    });
  }
  
  if (appStoreButton) {
    appStoreButton.classList.add('app-store-button', 'disabled');
    appStoreButton.addEventListener('click', function(e) {
      e.preventDefault();
      showAppNotification('apple');
    });
  }
});