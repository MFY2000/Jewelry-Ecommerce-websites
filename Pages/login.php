<?php 
    
    include '..\assets\php\MainBody.php'; 

    $index = new PageBody("login", "..");
    $index->navBar();
    $index->banner();
    if($_GET["page"] == "signIN")
        $index->loginSection();
    else{
        $index->signupSection();
    }
    
    if(isset($_SESSION["Login"]["message"])){
        $type = $_SESSION["Login"]["error"]  ? "succes" : "error";
        $index->alertSection($_SESSION["Login"]["message"], $type);
    }

    $index->footer();
    
    echo $index->body();
    
    unset($_SESSION['Login']["message"]);
    ?>