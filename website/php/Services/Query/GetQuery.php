<?php
  $getQuery = "select `uid` from `user` where  ";



  function getUser($email, $password){
    $query = $GLOBALS["getQuery"]."`Email` = '".$_POST["Email"]."', `Password` ='".$_POST["Password"]."' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION["Login"]["id"] = $row["uid"];
      }
    }
  }
?>