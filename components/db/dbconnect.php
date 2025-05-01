<?php 



require_once __DIR__ . '/../../vendor/autoload.php'; // adjust path if needed

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../'); // go to project root
$dotenv->load();







$servername=$_ENV['DB_HOST'];
$username=$_ENV['DB_USER'];;
$password=$_ENV['DB_PASS'];;
$database=$_ENV['DB_NAME'];;
$myconnect=mysqli_connect( $servername,$username,$password,$database);
//  if(!$myconnect)
//  {
//    die("server is not connected");
//  }
//  else
//  {
//    echo "server is connected pease check the code";
//  }





?>