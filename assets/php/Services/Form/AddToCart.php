<?php

  session_start();
  $_SESSION['Message']["error"] = 0;
  $_SESSION['Message']["message"] =  "Product ".$_GET['ID']." has been added to your cart sussessfully";


  $_SESSION['cart'][$_GET['ID']] = $_GET['quanatity'];


  header("Location: ../../../../Pages/productDetail.php?product=".$_GET['ID']);
?>