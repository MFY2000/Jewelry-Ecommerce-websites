
<?php include '..\php\MainBody.php'; 
    
$index = new PageBody("aboutus", "..");
$index->navBar();
$index->banner();
$index->aboutus();
$index->footer();

echo $index->body();

?>


<!--  -->