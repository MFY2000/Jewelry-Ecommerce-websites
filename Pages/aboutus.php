
<?php include '..\assets\php\MainBody.php'; 
    
$index = new PageBody("about-us", "..");
$index->navBar();
$index->banner();
$index->aboutus();
$index->footer();

echo $index->body();

?>


<!--  -->