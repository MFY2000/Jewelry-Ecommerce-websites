<?php 
    
    include '..\php\MainBody.php'; 

    $index = new PageBody("product-detials", "..");
    $index->navBar();
    $index->banner();
    $index->detailsSection($_GET["product"]);
    $index->footer();
    
    echo $index->body();
    
    $_SESSION["login"]["message"] = "";
    ?>