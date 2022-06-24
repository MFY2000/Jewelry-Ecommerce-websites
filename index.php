
<?php include 'assets\php\MainBody.php'; 
    
    $index = new PageBody("index", ".");
    $index->navBar();
    $index->slider();
    $index->aboutUs();
    $index->product();
    $index->categories();
    $index->newsLetter();
    $index->footer();
    
    
    echo $index->body();
?>