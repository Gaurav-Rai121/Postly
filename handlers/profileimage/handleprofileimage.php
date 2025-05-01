<?php
session_start();
$id=$_SESSION['id'];
require '../../vendor/autoload.php'; // Include Cloudinary SDK
include('../../compoenets/database/dbconnect.php');

use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => 'dba1eoer4', // replace with your Cloudinary cloud name
        'api_key'    => '446255843671799',    // replace with your Cloudinary API key
        'api_secret' => 'XB-_4otm5jNc__-0rXSjuRqNWIw', // replace with your Cloudinary API secret
    ],
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = $_FILES['profile_picture'];
    $fileType = $file['type'];
    $fileSize = $file['size'];

    // Image validation parameters
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes



            // Validate file size
            if ($fileSize > $maxFileSize) {
                $error=" File size exceeds the maximum limit of 2 MB.";
                header('location:../../pages/user/profileimage.php?error='.urldecode($error).'');
                exit;
            }
              
            else if (!in_array($fileType, $allowedTypes)) {
                 $error= "Invalid file type. Only JPG, PNG, and GIF types are allowed.";
                 header('location:../../pages/user/profileimage.php?error='.urldecode($error).'');
                exit;
             }
    
           
          else{
            try {
                // Upload image to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                    'folder' => 'UserProfileImages', // replace with your desired Cloudinary folder
                ]);

                $imageUrl = $uploadResult['secure_url']; // Cloudinary image URL
                $insert = "UPDATE `users` SET `profile_image`='$imageUrl' WHERE `id`='$id'";

                $querry2 = mysqli_query($myconnect, $insert);
                if ($querry2) {
                    header("location:../../pages/public/home.php");
                } else {
                    $error= "An unexpected error occurred. Please try again later.";
                    header('location:../../pages/user/profileimage.php?error='.urldecode($error).'');
                }
            } catch (Exception $e) {
                $error=  $e->getMessage();
                header('location:../../pages/user/profileimage.php?error='.urldecode($error).'');
            }
        }
}
else {
    $error= "An unexpected error occurred. Please try again later.";
    header('location:../../pages/user/profileimage.php?error='.urldecode($error).'');
}
?>