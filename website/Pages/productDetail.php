<?php 
    
    include '..\php\MainBody.php'; 

    $index = new PageBody("product-detials", "..");
    $index->navBar();
    $index->banner();
    $index->detailsSection();
    $index->footer();
    
    echo $index->body();
    
    $_SESSION["login"]["message"] = "";
    ?>