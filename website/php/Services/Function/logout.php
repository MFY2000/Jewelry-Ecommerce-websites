<?php 
  session_start();

  unset($_SESSION["Login"]["id"]);
  $_SESSION["Login"]["message"] = "Logout Successfully";
  $_SESSION["Login"]["error"] = true;

  
  header("Location: ..\..\..\index.php");


?>