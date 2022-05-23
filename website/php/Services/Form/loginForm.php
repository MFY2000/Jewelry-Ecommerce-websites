<?php
  include '..\Query\GetQuery.php'; 
  
  $message = "";
  $error = true; 

  if(!isset($_POST["email"])){
    $message = "Name is required";
  }else if(!isset($_POST["password"])) {
    $message = "phone number is required";
  }else{
    
    
    if(getUser($_POST["email"], $_POST["password"])){
      $message = "Successfully Login";
      $error = false;
    }else{
      $message = "Error".$conn->error;
      $error = false;
    }
  }

  $_SESSION["Login"]["message"] = $message;
  $_SESSION["Login"]["error"] = $error;
  
  echo $_SESSION["Login"]["id"];
  
  // header("Location: ..\..\..\index.php");
?>