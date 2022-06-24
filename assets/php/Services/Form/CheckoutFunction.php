<?php

  if($_GET['isadd']){
    session_start();

    $_SESSION['checkOut']["total"] = $_GET['total'];


     header("Location: ../../../../Pages/checkout.php");
  }else {
    
    $_SESSION['checkOut']["total"] =  $_SESSION['checkOut']["total"] - ($_GET['p1'] * $_GET['p2']);
    unset($_SESSION['cart'][$_GET['id']]);
    
    
    header("Location: ../../../../Pages/checkout.php");
  }

?>