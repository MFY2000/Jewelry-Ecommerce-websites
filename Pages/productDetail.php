<?php 
    
    include '..\assets\php\MainBody.php'; 

    $index = new PageBody("product-detials", "..");
    
    if(!isset($_GET["product"])){
        $_SESSION['Message']["message"] = "Unable to find specific product";
        $_SESSION['Message']["error"] = true;
        header("Location: ../index.php");
    }
    
    $index->navBar();
    $index->banner();
    $index->detailsSection($_GET["product"]);
    $index->footer();
    
    echo $index->body();
    ?>