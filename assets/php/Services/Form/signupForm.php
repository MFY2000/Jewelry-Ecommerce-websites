<?php
  include '..\Query\InsertQuery.php'; 
  include '..\Query\GetQuery.php'; 
  
  $message = "";
  $error = true; 


  
  // if(!isset($_POST["email"])){
  //   $message = "Name is required";
  // }else if(!isset($_POST["password"])) {
  //   $message = "phone number is required";
  // }else{
    $query = $insertQuery_signUp.("( '".$_POST["Email"]."', '".$_POST["Password"]."', '".$_POST["Firstname"]."', '".$_POST["Lastname"]."', '1' )");

    $result = $conn->query($query);
    
    if($result){
      getUser($_POST["Email"], $_POST["Password"]);
      $message = "Successfully login";
      $error = false;
    }else{
      $message = "Error".$conn->error;
    }
  // }
  session_start();


  $_SESSION['Message']["message"] = $message;
  $_SESSION['Message']["error"] = $message;
  header("Location: ..\..\..\Pages\index.php");
?>