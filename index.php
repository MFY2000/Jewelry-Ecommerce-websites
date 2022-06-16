
<?php include 'assets\php\MainBody.php'; 
    
    $index = new PageBody("index", ".");
    $index->navBar();
    $index->slider();
    $index->aboutUs();
    $index->product();
    $index->categories();
    $index->newsLetter();
    $index->footer();

    if(isset($_SESSION["Login"]["message"])){
        $type = $_SESSION["Login"]["error"]  ? "succes" : "error";
        $index->alertSection($_SESSION["Login"]["message"], $type);
    }
    
    echo $index->body();
    unset($_SESSION['Login']["message"]);
?>