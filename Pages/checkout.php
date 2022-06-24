<?php include '..\assets\php\MainBody.php'; 
    
    $index = new PageBody("products-cart", "..");
    $index->navBar();
    $index->banner();
    $index->checkOutSection();
    $index->checkOutTotalSection();
    $index->footer();
    
    echo $index->body();

?>