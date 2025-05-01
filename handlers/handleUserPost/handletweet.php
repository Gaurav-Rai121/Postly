<?php
 
  session_start();
  session_regenerate_id(true);
  include('../../functions/SucessErrorFunc/sucessError.php');

  require_once __DIR__ . '/../../vendor/autoload.php'; // adjust path if needed

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../'); // go to project root

  $dotenv->load();

  include('../../components/db/dbconnect.php');
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $anonymous = isset($_POST['anonymous']) ? $_POST['anonymous'] : 'default';
  
    
    $thread = (string)$_POST['tweetContent'];
    $Istags=!empty($_POST['tags'])?$_POST['tags']:'No tags is used in this tweet';
    $tags= $Istags;
    $LoginUserId=(int)$_SESSION['id'];

    if(empty($_POST['csrf_token']) || $_POST['csrf_token']!==$_SESSION['csrf_token'] ){
        errorMessage('Invalid CSRF token. Please try again.');
        header('location:../../pages/user/AddTweet.php');
        exit;
                                    
    }

    unset($_SESSION['csrf_token']);


    $trimThread=trim($thread);

    if(strlen($trimThread)<50){

        errorMessage('Your tweet content is too short. Write at least 50 characters.');
        header('location:../../pages/user/AddTweet.php');
        exit;

    }


     if( strlen($trimThread)>500){

        errorMessage('Your tweet content exceeds the limit of 500 characters');
        header('location:../../pages/user/AddTweet.php');
        exit;

    }
    $specialCharacters = '!@#$%^&*()-_=+[]{};:\'",.<>?/|\\`~';

    
  
    if(ctype_digit($trimThread[0]))
    {
        errorMessage("Post content does not start with number");
        header('location:../../pages/user/AddTweet.php');
        exit;
    }

    if(strpos($specialCharacters , $trimThread[0])!==false)
    {
        errorMessage("Post content does not start with special character");
        header('location:../../pages/user/AddTweet.php');
        exit;
    }


      
      
   try{
    $stmt=$myconnect-> prepare("INSERT INTO usertweet(`TweetContent`, `TweetType`, `TweetTags`, `UserId`)  VALUES (?,?,?,?)");
    $stmt->bind_param('sssi',$thread,$anonymous,$tags,$LoginUserId);
    $result=$stmt->execute();
     

    if($result){
        sucessMessage("Your tweet is uploaded.");
         header('location:../../pages/user/AddTweet.php');
         exit;
    }
    else {
        errorMessage(" Your tweet  is not uploaded. Please try again");
         header('location:../../pages/user/AddTweet.php');
         exit;
    }


   }catch(Exception $e){
    errorMessage("A database error occurred. Please try again later.");
    header('location:../../pages/user/AddTweet.php');
    exit;
   }

    
  


}
else {
   
     errorMessage( "An unexpected error occurred. Please try again later.");
     header('location:../../pages/user/AddTweet.php');
     exit;
}






?>