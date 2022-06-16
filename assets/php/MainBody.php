<?php 

$import_Module =  ["loginSection" ,"NavBar" ,"Slider" ,"banner" ,"aboutus" ,"Product" ,"Categories" ,"newsLetter" ,"Footer" ,"contactus" ,"signupSection" ,"snackBar" ,"terms" ,"DetailsSection", "cartSection", "checkOutSection"];

session_start();

class PageBody {
  // Properties
  public $title;
  public $root;
  public $template;
  
  function __construct($title, $path){
    $this->title = $title;
    $this->root = $path;
    $this->template = "";
    
    include_once "$this->root/assets/php/Services/DB.php";
    include_once "$this->root/assets/php/Services/Query/Query.php";
    
    $this->db_instant = new db_Connection();


    foreach ($GLOBALS["import_Module"] as $key => $name) {
      require_once("$this->root/assets/php/Components/$name.php");
    }  
  }
  

  function body() {
    return "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
        <meta charset='UTF-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <title>Jewellery design (".$this->title.")</title>
        <link rel='stylesheet' type='text/css' href='$this->root/assets/css/style.css' />
        <link rel='stylesheet' type='text/css' href='$this->root/assets/bootstrap/css/bootstrap.min.css' />
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' />
        
        <script src='$this->root/bootstrap/js/bootstrap.js'></script>
        <script src='$this->root/bootstrap/jQuery/jQuery.js'></script>
    </head>
    
    <body>"
    
    .$this->template.
    
    "<script src='$this->root/assets/bootstrap/js/bootstrap.min.js'></script>
    <script src='$this->root/assets/bootstrap/js/bootstrap.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js' integrity='sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script> function togo(url){ window.location.href = './Pages/productDetail.php?product='+url; } </script>
  
    </body>

  </html>";
  }

  // Methods
  function navBar() {
    $this->template = $this->template.navigation($this->root);
  }

  function slider() {
    $this->template = $this->template.SliderCarousel();
  }

  function banner() {
    $this->template = $this->template.BannerSection($this->title);
  }
  
  function aboutUs() {
    $query = $this->db_instant->querys->Getquery->getQuery_aboutUs;
    $result = $this->db_instant->getData($query);

    $this->template = $this->template.aboutSection($this->root, $result);
  }

  function product(){    
    $query = $this->db_instant->querys->Getquery->getQuery_Product." LIMIT 0,4";
    $result = $this->db_instant->getData($query);
    

    $this->template = $this->template.ProductSection($this->root,$result);
  }

  function categories() {    
    $query = $this->db_instant->querys->Getquery->getQuery_categories." LIMIT 0,3";
    $result = $this->db_instant->getData($query);
    $this->template = $this->template.CategoriesSection($this->root,$result);
  }

  function newsLetter() {
    $this->template = $this->template.newsLetterSection($this->root);
  }

  function footer() {
    $this->template = $this->template.FooterSection($this->root);
  }

  function productHeader(){
    $this->template = $this->template.ProductheaderSection($this->root,16);
  }

  function contactusSection(){
    $this->template = $this->template.getContactUs();
  }

  function loginSection(){
    $this->template = $this->template.getLoginSection();
  }
  
  function signupSection(){
    $this->template = $this->template.getSignUpSection();
  }

  function alertSection($message, $type){
    $this->template = $this->template.getSnackBar($message, $type);
  }
  
  function termSection(){
    $this->template = $this->template.getTMC();
  }

  function detailsSection($productID){
    $query = $this->db_instant->querys->Getquery->getQuery_Single_Product." where PID = '".$productID."'";
    $result = $this->db_instant->getData($query);
    $this->template = $this->template.getDetails($this->root, $result);
  }

  function cartSection(){
    $this->template = $this->template.getCart();
  }

  function checkOutSection(){
    $this->template = $this->template.getCheckOut();
  }
}

?>



