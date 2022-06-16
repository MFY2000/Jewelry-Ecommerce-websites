<?php 
  class Query{
    
    public $Getquery;
    public $insertquerys;
    
    function __construct(){
      $this->Getquery = new getQuery();
      $this->insertquerys = new InsertQuery();
    }
    
    // function getData($query){
    //   $this->result = $this->querys->getData($this->query);
    //   return $this->result;
    // }
   
    }
  class getQuery{
    public $getQuery_product = "select `PID`,`Title` from `product` limit ";
    public $getQuery = "select `uid` from `user` where  ";
    public $getQuery_categories = "SELECT `categories`.`CID`, `categories`.`Title`, `product_images`.`imageName` FROM `categories` INNER JOIN `product` ON `product`.CID = `categories`.CID INNER JOIN `product_images` ON `product`.PID = `product_images`.PID";
    public $getQuery_Product = "SELECT `product`.`PID`,`product`.`Title`,`product_images`.`imageName` FROM `product` INNER JOIN `product_images` ON `product`.PID = `product_images`.PID";
    public $getQuery_Single_Product = "SELECT * FROM `categories` INNER JOIN `product` ON `product`.CID = `categories`.CID INNER JOIN `product_images` ON `product`.PID = `product_images`.PID";
    public $getQuery_aboutUs = "SELECT * FROM `aboutus` LIMIT 1";

  }  

  class InsertQuery{
    public $insertQuery_contactUs = "INSERT INTO `contact_us`( `name`, `phoneNumber`, `address`, `message`) VALUES ";
    public $insertQuery_signUp = "INSERT INTO `user`(`Email`, `Password`, `Firstname`, `Lastname`, `Status`) VALUES ";  
    
  }  


  // }


?>