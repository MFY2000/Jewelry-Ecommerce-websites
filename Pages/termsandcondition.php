<?php 
    
    include '..\assets\php\MainBody.php'; 

    $index = new PageBody("termsandcondition", "..");
    $index->navBar();
    $index->banner();
    $index->termSection();
    $index->footer();
    
    echo $index->body();
    
?>