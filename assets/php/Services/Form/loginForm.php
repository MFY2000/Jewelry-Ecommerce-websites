<?php
  
  isUser($_POST["email"], $_POST["password"]);

  
  echo $_SESSION["Login"]["id"];
  header("Location: ..\..\..\index.php");
?>