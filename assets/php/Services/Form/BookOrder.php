<?php

  session_start();
  $_SESSION['Message']["error"] = 0;
  $_SESSION['Message']["message"] =  "Your Order has be place we will contact you as soon as possible";

  echo $_GET["data"]


  // header("Location: ../../../../index.php");
?>