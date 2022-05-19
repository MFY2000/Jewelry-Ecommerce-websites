<?php
  include '..\DBConnection.php'; 
  include '..\Query\InsertQuery.php'; 
  
  $message = "";
  $error = true; 

  if(!isset($_POST["email"])){
    $message = "Name is required";
  }else if(!isset($_POST["password"])) {
    $message = "phone number is required";
  }else{
    $query = $insertQuery_contactUs.("('".$_POST["email"]."','".$_POST["password"]."')");
    
    $result = $conn->query($query);
    
    if($result){
      $message = "Successfully login";
      $error = false;
    }else{
      $message = "Error".$conn->error;
    }
  }
  session_start();

  $_SESSION["Login"]["Uid"] = $message;
  $_SESSION["Login"]["message"] = $message;
  $_SESSION["Login"]["error"] = $message;
  header("Location: ..\..\..\Pages\contactus.php");
?>