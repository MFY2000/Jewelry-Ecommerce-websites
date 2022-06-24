<?php

  session_start();

  unset($_SESSION['Login']);
  $_SESSION['Message']["message"] = "Successfully Login out";
  $_SESSION['Message']["error"] = 0;
  
  header("Location: ../../../../index.php");
?>