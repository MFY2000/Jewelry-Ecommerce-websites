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
    $index->footer();
    
    echo $index->body();
    
    if(isset($_POST["email"]) && isset($_POST["password"])){
        if($index->db_instant->isUser($_POST["email"], $_POST["password"])){
            echo "<script> window.location.href = '../index.php'; </script>";
        }else{
            $index->alertSection($_SESSION['Message']["message"], "Error"); 
        }
        
    }
    


    ?>