


<?php include '..\php\MainBody.php'; 
    
$index = new PageBody("shop", "..");
$index->navBar();
$index->banner();
$index->productHeader();
$index->footer();

echo $index->body();

?>


<!--  -->