<?php include '..\php\MainBody.php'; 
    
    $index = new PageBody("products-cart", "..");
    $index->navBar();
    $index->banner();
    $index->checkOutSection();
    $index->footer();
    
    echo $index->body();

?>