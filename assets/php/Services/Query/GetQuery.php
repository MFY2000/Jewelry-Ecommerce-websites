<?php

  $getQuery = "select `uid` from `user` where  ";
  $getQuery_product = "select `PID`,`Title` from `product` limit ";


  function getUser($email, $password){
    $query = $GLOBALS["getQuery"]."`Email` = '".$email."', `Password` ='".$password."' ";
    $result = $GLOBALS["conn"]->query($query);

    if ($result->num_rows > 0) {
      while($row = $result -> fetch_row()) {
        $_SESSION["Login"]["id"] = $row["uid"];
      }
    }
    return $result;
  }



  
?>