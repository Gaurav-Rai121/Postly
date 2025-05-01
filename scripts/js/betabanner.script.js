  // Toggle between expanded and minimized states
  const notification = document.getElementById('beta-notification');
  //  const minimizedBtn = document.getElementById('minimized-btn');
    const closeBtn = document.getElementById('close-btn');
    const feedbackLink = document.getElementById('feedback-link');
    
    // Replace with your actual feedback form URL
    const feedbackFormUrl ='../../components/betaModeFeedback/BetaModeFeedbackForm.php';
    
    feedbackLink.addEventListener('click', (e) => {
        e.preventDefault();
        window.open(feedbackFormUrl, '_blank');
    });
    
    closeBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            notification.style.display = 'none';
            minimizedBtn.classList.add('show');
        }, 300);
    });
    
    minimizedBtn.addEventListener('click', () => {
        minimizedBtn.classList.remove('show');
        
        setTimeout(() => {
            notification.style.display = 'block';
            setTimeout(() => {
                notification.style.opacity = '1';
                notification.style.transform = 'translateY(0)';
            }, 10);
        }, 300);
    });