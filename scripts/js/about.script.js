    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('button.sm\\:hidden');
        const mobileMenu = document.querySelector('.sm\\:hidden.hidden');
        
        menuButton.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
        });
      });
      
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 80,
              behavior: 'smooth'
            });
          }
        });
      });