<?php 

$import_Module =  ["loginSection" ,"NavBar" ,"Slider" ,"Banner" ,"Aboutus" ,"Product" ,"Categories" ,"newsLetter" ,"Footer" ,"contactus" ,"signupSection" ,"snackBar" ,"terms" ,"DetailsSection", "cartSection", "checkOutSection"];

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
    
    
    include "$this->root\php\Services\DBConnection.php"; 
    

    foreach ($GLOBALS["import_Module"] as $key => $value) {
      require_once("$this->root/php/Components/$value.php");
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
        <link rel='stylesheet' type='text/css' href='$this->root/css/style.css' />
        <link rel='stylesheet' type='text/css' href='$this->root/bootstrap/css/bootstrap.min.css' />
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' />
        
        <script src='$this->root/bootstrap/js/bootstrap.js'></script>
        <script src='$this->root/bootstrap/jQuery/jQuery.js'></script>
    </head>
    
    <body>"
    
    .$this->template.
    
    "<script src='$this->root/bootstrap/js/bootstrap.min.js'></script>
    <script src='$this->root/bootstrap/js/bootstrap.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js' integrity='sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
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
    $this->template = $this->template.aboutSection($this->root);
  }

  function product(){    
    $this->template = $this->template.ProductSection($this->root,4);
  }

  function categories() {    
    $this->template = $this->template.CategoriesSection($this->root,3);
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

  function detailsSection(){
    $this->template = $this->template.getDetails($this->root);
  }

  function cartSection(){
    $this->template = $this->template.getCart();
  }

  function checkOutSection(){
    $this->template = $this->template.getCheckOut();
  }
}

?>



