<?php

    //retrieve all values from the server
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 

    //send back an 'OK' message
    

    //PREVIEW => error checking on the server side
    $errors = 0;
    $errorMessage = "";

    if ($email == "" ) { $errors = 1; $errorMessage = "Email is required"; }
    if ($subjet == "" ) { $errors = 2; $errorMessage = "Subject is required"; }
    if ($message == "" ) { $errors = 3; $errorMessage = "A message is required"; }
  
   
    

    //if errors 
    if ($errors !=0) {
        //return error message
        echo "errors detected: $errorMessage";
    } else { //otherwise 
        //return OK
        echo "OK";
    }

?>