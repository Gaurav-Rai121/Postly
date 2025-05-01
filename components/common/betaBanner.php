<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Notification with Feedback</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../scripts/css/betaBanner.css">
</head>
<body>
    <!-- Simplified Beta Notification -->
    <div class="beta-notification" id="beta-notification">
        <div class="beta-card">
            <div class="pulse-dot"></div>
            
            <div class="beta-content">
                <h4 class="beta-title">This site is in beta</h4>
                <p class="beta-subtitle">We're testing new features</p>
                <a href="../../components/betaModeFeedback/BetaModeFeedbackForm.php" class="feedback-link" id="feedback-link" >Share your feedback</a>
            </div>
            
            <div class="beta-badge">β</div>
            
            <button class="beta-close" id="close-btn">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    
    <!-- Minimized button (initially hidden) -->
    <!-- <div class="minimized" id="minimized-btn">
        β
    </div>
     -->
    <script src="../../scripts/js/betabanner.script.js">
      
    </script>
</body>
</html>