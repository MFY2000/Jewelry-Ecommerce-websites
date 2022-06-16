<?php 
    
    include '..\assets\php\MainBody.php'; 
    


    $index = new PageBody("contact-us", "..");
    $index->navBar();
    $index->banner();
    $index->contactusSection();
    $index->footer();
    
    echo $index->body();
    
    if(isset($_SESSION["Contact"]["message"])){
        $type = $_SESSION["Contact"]["error"]  ? "succes" : "error";
        $index->alertSection($_SESSION["Contact"]["message"], $type);
    }

    unset($_SESSION["Contact"]["message"]);

    ?>
    
    
    <!--  -->