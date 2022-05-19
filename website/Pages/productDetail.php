<?php 
    
    include '..\php\MainBody.php'; 

    $index = new PageBody("product-detials", "..");
    $index->navBar();
    $index->banner();
    $index->banner();
    $index->footer();
    
    echo $index->body();
    
    $_SESSION["login"]["message"] = "";
    ?>