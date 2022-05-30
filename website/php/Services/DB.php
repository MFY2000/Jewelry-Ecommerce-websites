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
        // echo ;
    }
  }


  function getData($query){ 
    $result = $this->conn->query($query);
    $row = array();

    if(!$result){
      echo "issue";
      return null;
    }

    return $result;
  }
} 

?>