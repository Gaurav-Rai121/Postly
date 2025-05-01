<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture | Postly</title>
    <link rel="icon" type="image/png" href="./newlogo2.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../scripts/css/profileImage.css">
</head>

<body>
    <!-- Animated background elements -->
    <div class="bg-animation">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="blob blob-4"></div>
        <div class="particles" id="particles"></div>
    </div>

    <div class="container">
        <div class="card preview-card">
            <h1 class="title">Your Profile Picture</h1>
            <p class="subtitle">Create your unique identity on Postly with a perfect profile picture that represents
                you.</p>

            <div class="profile-preview">
                <div class="profile-image">
                    <i class="fas fa-user profile-placeholder"></i>
                    <img id="preview-image" src="" alt="Profile Preview">
                </div>
            </div>
        </div>

        <div class="card">
            <h2 class="title">Upload Photo</h2>
            <p class="subtitle">Choose a photo that represents you best</p>
            <?php
            $error=isset($_GET['error'])?urldecode($_GET['error']):'';



            if($error){
            echo'<div class=" error-notification">
                <div class="error-card">
                    <div class="error-icon-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 20C16.418 20 20 16.418 20 12C20 7.582 16.418 4 12 4C7.582 4 4 7.582 4 12C4 16.418 7.582 20 12 20ZM11 15H13V17H11V15ZM11 7H13V13H11V7Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="error-content">
                        <h4>Authentication Failed</h4>
                        <p>'.$error.'</p>
                    </div>
                </div>
            </div>';
            }

            ?>
            <form action="../../handlers/profileimage/handleprofileimage.php" method="post" enctype="multipart/form-data"
                id="upload-form">
                <div class="upload-option">
                    <div class="upload-area" id="upload-area">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h3 class="upload-title">Drag & Drop or Click to Upload</h3>
                        <p class="upload-info">Supports JPG, PNG files up to 5MB</p>
                    </div>

                    <input type="file" name="profile_picture" id="file-input" class="file-input" accept="image/*">
                </div>

                <div class="progress-bar" id="progress-bar">
                    <div class="progress" id="progress"></div>
                </div>

                <div class="divider">
                    <span>Or choose from our collection</span>
                </div>

                <div class="avatars-grid">
                    <div class="avatar-option" data-avatar="1">
                        <img src="/api/placeholder/100/100" alt="Avatar 1">
                    </div>
                    <div class="avatar-option" data-avatar="2">
                        <img src="/api/placeholder/100/100" alt="Avatar 2">
                    </div>
                    <div class="avatar-option" data-avatar="3">
                        <img src="/api/placeholder/100/100" alt="Avatar 3">
                    </div>
                    <div class="avatar-option" data-avatar="4">
                        <img src="/api/placeholder/100/100" alt="Avatar 4">
                    </div>
                    <div class="avatar-option" data-avatar="5">
                        <img src="/api/placeholder/100/100" alt="Avatar 5">
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                        Save & Continue
                    </button>
                    <a href="../../pages/public/home.php" class="btn btn-secondary">
                        Skip for now
                    </a>
                </div>
            </form>

            <p class="footer-note">You can always change your profile picture later in settings</p>
        </div>
    </div>

    <script src="../../scripts/js/profileimage.js">

    </script>
</body>

</html>