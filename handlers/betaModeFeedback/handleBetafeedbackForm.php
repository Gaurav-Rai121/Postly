<?php
session_start();
session_regenerate_id(true);

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
 
    
    $LoginUserId=(int)$_SESSION['id'];
    $rating = htmlspecialchars($_POST['rating']);
    $rate = filter_var($_POST['rate'], FILTER_VALIDATE_INT);
    $suggestion = htmlspecialchars($_POST['suggestion']);
    $userid = $LoginUserId;
    
    if (empty($rating) || empty($suggestion)) {
        $_SESSION['error_message'] = "Please fill in all fields.";
        header('location:../../components/betaModeFeedback/BetaModeFeedBackForm.php');
        exit;
    }
    

    if(strlen($suggestion)>200){
        $_SESSION['error_message']= "Suggestion is too long. Maximum 200 characters allowed.";
        header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
        exit;
    }

    elseif($rate === false || $rate === null) {
        $_SESSION['error_message'] = "Please select a valid rating.";
        header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
        exit;
    }
    
    


    if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {


                        $file = $_FILES['screenshot'];
                        $fileType = $file['type'];
                        $fileSize = $file['size'];

                        // Image validation parameters
                        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                        $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes
                        
                        $_SESSION['error_message']='';
                        $_SESSION['success_message']='';

                       

                       // Validate file size
                       if ($fileSize > $maxFileSize) {
                        $_SESSION['error_message']=" File size exceeds the maximum limit of 2 MB.";
                        header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                    
                        exit;
                       }  

                    $imageCheck = getimagesize($file['tmp_name']);
                    if ($imageCheck === false) {
                        $_SESSION['error_message'] = "Uploaded file is not a valid image.";
                        header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                        exit;
                    }

                      
                    else if (!in_array($fileType, $allowedTypes)) {
                          $_SESSION['error_message']= "Invalid file type. Only JPG, PNG, and GIF types are allowed.";
                         header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                        exit;
                     }
            
        
                        // $stmt=$myconnect->prepare("SELECT * FROM users WHERE sno=?");
                        // $stmt->bind_param('i',$LoginUserId);
                        // $stmt->execute();
                        // $loginUser=$stmt->get_result();
                        // $row=$loginUser->fetch_assoc();
        
        
                        else{
                            try {
                                // Upload image to Cloudinary
                                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                                    'folder' => 'BetaFeedBackImages', // replace with your desired Cloudinary folder
                                ]);
                
                                $imageUrl = $uploadResult['secure_url']; 
                                $stmt=$myconnect->prepare("INSERT INTO betamodefeedbackform(`RateOfExperience`, `WebsiteRating`, `UserNewIdeas`, `Image`, `userId` ) VALUES (?,?,?,?,?)");
                                $stmt->bind_param("sissi",$rating,$rate,$suggestion,$imageUrl,$userid);
                                $result=$stmt->execute();
                
                                if($result){
                                    $_SESSION['success_message']= "Thank you for your feedback.";
                                     header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                                     exit;
                                }
                                else {
                                    $_SESSION['error_message']= "Your image is not uploaded. Please try again";
                                     header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                                     exit;
                                }
                            } catch (Exception $e) {
                                // $error=  $e->getMessage();
                               
                                $error=  $e->getMessage();
                                error_log($e->getMessage()); // Log the detailed error
                                $_SESSION['error_message'] = "An error occurred. Please try again later."; // Generic user message

                                header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                                exit;
                            }
                        }
                     
          }
     
        else{
            $image='No image given by the user';



          

                           $stmt=$myconnect->prepare("INSERT INTO betamodefeedbackform(`RateOfExperience`, `WebsiteRating`, `UserNewIdeas`, `Image`, `userId` ) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sissi",$rating,$rate,$suggestion,$image,$userid);
            $result=$stmt->execute(); 
           




            if($result){
                $_SESSION['success_message']= "Thank you for your feedback.";
                header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                exit;
            }

         else {
            $_SESSION['error_message']= "Your feedback is not submitted. Please try again";
                header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
                exit;
            }
            
        }


 }
 else {
    $_SESSION['error_message']= "An unexpected error occurred. Please try again later.";
     header('location:../../components/betaModeBanner/BetaModeFeedBackForm.php');
     exit;
}


?>