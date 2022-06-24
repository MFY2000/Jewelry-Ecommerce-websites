


<?php include '..\assets\php\MainBody.php'; 
    
    $index = new PageBody("products-cart", "..");
    $index->navBar();
    $index->banner(); 
    $index->cartSection();
    $index->footer();
    
    echo $index->body();
    
    ?>
    
    
    <!--  -->