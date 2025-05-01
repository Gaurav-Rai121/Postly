    // Basic form interactivity (for demonstration purposes)
    document.addEventListener('DOMContentLoaded', function() {
        // Password visibility toggle
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');
        togglePasswordButtons.forEach(button => {
          button.addEventListener('click', function() {
            const passwordInput = this.parentElement.parentElement.querySelector('input');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
              passwordInput.type = 'text';
              icon.classList.remove('fa-eye-slash');
              icon.classList.add('fa-eye');
            } else {
              passwordInput.type = 'password';
              icon.classList.remove('fa-eye');
              icon.classList.add('fa-eye-slash');
            }
          });
        });
        
        // Custom checkbox styling
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
          checkbox.addEventListener('change', function() {
            const icon = this.parentElement.querySelector('.checkbox-icon');
            const box = this.parentElement.querySelector('.checkbox-box');
            
            if (this.checked) {
              icon.classList.remove('opacity-0');
              box.classList.add('bg-indigo-500', 'border-indigo-500');
              box.classList.remove('border-gray-300');
            } else {
              icon.classList.add('opacity-0');
              box.classList.remove('bg-indigo-500', 'border-indigo-500');
              box.classList.add('border-gray-300');
            }
          });
        });
        
        // Custom radio styling
        const radios = document.querySelectorAll('input[type="radio"]');
        radios.forEach(radio => {
          radio.addEventListener('change', function() {
            // Reset all
            document.querySelectorAll('.radio-dot').forEach(dot => {
              dot.classList.add('hidden');
            });
            document.querySelectorAll('.radio-button').forEach(btn => {
              btn.classList.remove('bg-indigo-500', 'border-indigo-500');
              btn.classList.add('border-gray-300');
            });
            
            // Style selected
            if (this.checked) {
              const dot = this.parentElement.querySelector('.radio-dot');
              const btn = this.parentElement.querySelector('.radio-button');
              dot.classList.remove('hidden');
              btn.classList.add('bg-indigo-500', 'border-indigo-500');
              btn.classList.remove('border-gray-300');
            }
          });
        });
      });







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