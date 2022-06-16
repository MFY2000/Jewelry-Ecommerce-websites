<?php

class db_Connection{
  public $conn;
  public $querys;

  
  function __construct(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'jewelry';
    
    $this->conn = mysqli_connect($servername,$username,$password,$databasename); 
    if (!$this->conn) {
        
    }else{
        $this->querys = new Query(); 

    }
  }


  function getData($query){ 
    $result = $this->conn->query($query);
    return !$result ? null : $result;
  }

  function isUser(){
    $isUser = false;

    $query = $this->querys->Getquery->getQuery;
    $query = $query.("`Email` = '".$email."', `Password` ='".$password."' ");

    $result = getData($query);

    if($result->num_rows > 0){
      
      while($row = $result -> fetch_row()) {
        $_SESSION["Login"]["id"] = $row["uid"];
      }
      
      $isUser = true;
      $message = "Successfully Login with email amd passwords";
      $error = false;
    }else{
      $message = "Error".$conn->error;
      $error = true;
    }

    $_SESSION["Error"]["type"]    = $error;
    $_SESSION["Error"]["Message"] = $message;
    return $isUser;

  }

} 

?>