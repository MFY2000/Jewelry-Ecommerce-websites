<?php


function getCategory($NoOfCategory) {
  $CategoryCard = "
    
  <div class='col-md-4 col-sm-6'>
      <img src='./images/categoriesPic1.png' alt='categories pic 1'>
  </div>";
  
  $Category = "";
  for ($i=0; $i < $NoOfCategory; $i++)
    $Category = $Category. $CategoryCard ;
  return $Category;
}



function CategoriesSection($root,$NoOfCategory){
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
              ".getCategory($NoOfCategory)."
          </div>
      </div>
    </section>
  <!-- categories end -->";
}
?>

