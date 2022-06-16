<?php
  include '..\DBConnection.php'; 
  include '..\Query\InsertQuery.php'; 
  
  $message = "";
  $error = true; 

  if(!isset($_POST["name"])){
    $message = "Name is required";
  }else if(!isset($_POST["phone"])) {
    $message = "phone number is required";
  }else if(!isset($_POST["address"])) {
    $message = "Address is required";
  }else if(!isset($_POST["message"])) {
    $message = "message is required";
  }else{
    $query = $insertQuery_contactUs.("('".$_POST["name"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["message"]."')");
    
    $result = $conn->query($query);
    
    if($result){
      $message = "Successfully Submit";
      $error = false;
    }else{
      $message = "Error".$conn->error;
      $error = true;

    }
  }
  session_start();

  $_SESSION["Contact"]["message"] = $message;
  $_SESSION["Contact"]["error"] = $error;
  header("Location: ..\..\..\Pages\contactus.php");
?>