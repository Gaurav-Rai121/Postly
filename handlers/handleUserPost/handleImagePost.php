<?php
 
  session_start();
  session_regenerate_id(true);
  include('../../functions/SucessErrorFunc/sucessError.php');

  require_once __DIR__ . '/../../vendor/autoload.php'; // adjust path if needed

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../'); // go to project root

  $dotenv->load();

  include('../../compoenets/database/dbconnect.php');
  use Cloudinary\Cloudinary;
  
  $cloudinary = new Cloudinary([
      'cloud' => [
          'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
          'api_key'    => $_ENV['CLOUDINARY_API_KEY'],
          'api_secret' => $_ENV['CLOUDINARY_API_SECRET'],
      ],
  ]);
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $anonymous = isset($_POST['anonymous']) ? $_POST['anonymous'] : 'default';
    $realAnonymous = htmlspecialchars($anonymous);
    
    $thread = htmlspecialchars((string)$_POST['postContent']);
    $Istags=!empty($_POST['tags'])?$_POST['tags']:'No tags is used in this post';
    $tags= htmlspecialchars($Istags);
    $file = $_FILES['image'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $LoginUserId=(int)$_SESSION['id'];

    if(!($_POST['csrf_token'])|| $_POST['csrf_token']!==$_SESSION['csrf_token'] ){
        errorMessage('Invalid CSRF token. Please try again.');
        header('location:../../pages/user/AddImagePost.php');
        exit;

    }

    unset($_SESSION['csrf_token']);

    // Image validation parameters
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes


    if(strlen(trim($thread))<50){

        errorMessage('Your post content is too short. write in minimum 50 words');
        header('location:../../pages/user/AddImagePost.php');
        exit;

    }


     if( strlen(trim($thread))>500){

        errorMessage('Your post content exceeds the limit of 500 characters');
        header('location:../../pages/user/AddImagePost.php');
        exit;

    }
   $number=["0","1","2","3","4","5","6","7","8","9"];
   $specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', ';', ':', '\'', '"', ',', '<', '>', '.', '?', '/', '|', '\\', '`', '~'];

   $actualThread=trim($thread);
  



    if(array_search($actualThread[0],$number)!==false || $actualThread[0]==='0')
    {
        errorMessage("Post content does not start with number");
        header('location:../../pages/user/AddImagePost.php');
        exit;
    }

    if(array_search($actualThread[0],$specialCharacters)!==false)
    {
        errorMessage("Post content does not start with special character");
        header('location:../../pages/user/AddImagePost.php');
        exit;
    }

    if(!isset($_FILES['image'])){
        errorMessage("Please add a image");
        header('location:../../pages/user/AddImagePost.php');
        exit;
    }

    if (!isset($_FILES['image']) || $_FILES['image']['error'] === 4) {
        errorMessage("Please upload an image.");
        header('location:../../pages/user/AddImagePost.php');
        exit;
    }

  
   

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK ){
      $imageCheck = getimagesize($file['tmp_name']);
        // Validate file size
        if ($fileSize > $maxFileSize) {
            errorMessage(" File size exceeds the maximum limit of 2 MB.");
            header('location:../../pages/user/AddImagePost.php');
            exit;
        }  

        
        elseif ($imageCheck === false) {
            errorMessage("Uploaded file is not a valid image.");
            header('location:../../pages/user/AddImagePost.php');
            exit;
        }

            
        elseif (!in_array($fileType, $allowedTypes)) {
            errorMessage("Invalid file type. Only JPG, PNG, and GIF types are allowed.");
            header('location:../../pages/user/AddImagePost.php');
            exit;
        }


        else{
            try {
                // Upload image to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                    'folder' => 'UserPostImages', // replace with your desired Cloudinary folder
                ]);

                $imageUrl = $uploadResult['secure_url']; 
               
                $stmt=$myconnect-> prepare("INSERT INTO userimagespost( `postContent`, `postImage`, `PostTags`, `PostType`, `userId`) VALUES (?,?,?,?,?)");
                $stmt->bind_param('ssssi',$thread,$imageUrl,$tags,$anonymous,$LoginUserId);
                $result=$stmt->execute();
                 

                if($result){
                    sucessMessage("Yor post is uploaded.");
                     header('location:../../pages/user/AddImagePost.php');
                     exit;
                }
                else {
                    errorMessage(" Your post image is not uploaded. Please try again");
                     header('location:../../pages/user/AddImagePost.php');
                     exit;
                }
            } catch (Exception $e) {
                // $error=  $e->getMessage();
               
                $error=  $e->getMessage();
                error_log($e->getMessage()); // Log the detailed error
                errorMessage(" An error occurred. Please try again later.");
                header('location:../../pages/user/AddImagePost.php');
                exit;
            }
        }


    }
  


}
else {
   
     errorMessage( "An unexpected error occurred. Please try again later.");
     header('location:../../pages/user/AddImagePost.php');
     exit;
}






?>