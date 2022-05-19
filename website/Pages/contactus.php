<?php 
    
    include '..\php\MainBody.php'; 
    


    $index = new PageBody("contactus", "..");
    $index->navBar();
    $index->banner();
    $index->contactusSection();
    $index->footer();
    
    echo $index->body();
    
    $_SESSION["Contact"]["message"] = "";

    ?>
    
    
    <!--  -->