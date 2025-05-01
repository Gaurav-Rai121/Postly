<?php

function sucessMessage($message){
    $_SESSION['success_message']=$message;
    echo $message;
}



function errorMessage($message){
    $_SESSION['error_message']=$message;
    echo $message;
}

// errorMessage('hello');












?>