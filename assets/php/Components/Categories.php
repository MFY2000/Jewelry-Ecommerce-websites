<?php


function getCategory($root,$result) {
  $Category = "";
    
  if ($result->num_rows > 0) {
    while($row = $result -> fetch_row()) {
      $Category = $Category."<div  class='col-md-4 col-sm-6' id='".$row[0]."'>
          <img src='$root/assets/images/Product/".$row[2]."' alt='".$row[1]."'>
      </div>";
    }
  }
  return $Category;
}



function CategoriesSection($root,$result){
  return "
  <!-- categories start -->
    <section class='categories'>
      <div class='container'>
          <div class='row'>
              <div class='col-md-12'>
                  <div class='categoriesHeader'>
                      <h3 class='primaryHeading'>Categories</h3>
                      <h1 class='secondaryHeading'>Product By Categories</h1>
                      <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  </div>
              </div>
          </div>
          <div class='row'>
              ".getCategory($root,$result)."
          </div>
      </div>
    </section>
  <!-- categories end -->";
}
?>

