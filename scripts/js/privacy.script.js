 // JavaScript for accordion functionality
 document.addEventListener('DOMContentLoaded', function() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    
    accordionButtons.forEach(button => {
      button.addEventListener('click', function() {
        const accordionItem = this.parentElement;
        accordionItem.classList.toggle('active');
      });
    });
    
    // Scroll progress bar
    window.onscroll = function() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
      
      // Sticky navigation
      var privacyNav = document.getElementById("privacy-nav");
      var sticky = privacyNav.offsetTop;
      
      if (window.pageYOffset > sticky) {
        privacyNav.classList.add("fixed");
      } else {
        privacyNav.classList.remove("fixed");
      }
      
      // Highlight active section
      const sections = document.querySelectorAll('section');
      const navLinks = document.querySelectorAll('.policy-card');
      
      let current = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if(pageYOffset >= sectionTop - 200) {
          current = section.getAttribute('id');
        }
      });
      
      navLinks.forEach(link => {
        link.classList.remove('active-section');
        if(link.getAttribute('href').substring(1) === current) {
          link.classList.add('active-section');
        }
      });
    };
  });