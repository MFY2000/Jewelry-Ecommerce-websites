<?php
class db_Connection{
  public $conn;
  
  function __construct(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'jewelry';
    
    $this->conn = mysqli_connect($servername,$username,$password,$databasename); 
    if (!$this->conn) {
        
    }else{
        // echo ;
    }

  }


} 

?>