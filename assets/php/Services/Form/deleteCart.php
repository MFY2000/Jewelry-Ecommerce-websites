<?php


session_start();
$_SESSION['Message']["error"] = 0;
$_SESSION['Message']["message"] = "Product ".$_GET['ID']." has been delete from your cart sussessfully";


unset($_SESSION['cart'][$_GET['ID']]);

  header("Location: ../../../../Pages/cart.php");

?>