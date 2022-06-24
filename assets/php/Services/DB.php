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

  function isUser($email, $password){
    $isUser = false;

    $query = $this->querys->Getquery->getQuery;
    $query = $query.("`Email` = '".$email."' AND `Password` ='".$password."' ");

    $result = $this->getData($query);
    
    if($result->num_rows > 0){
      $isUser = true;
      $message = "Successfully Login with email amd passwords";
      $error = false;

      while($row = $result -> fetch_row()) {
        $_SESSION["Login"]["id"] = $row[0];
      }
      
    }else{
      $message = "User email amd passwords is incorrect ".$this->conn->error;
      $error = true;
    }

    $_SESSION['Message']["error"]    = $error;
    $_SESSION['Message']["message"] = $message;
    return $isUser;

  }

} 

?>