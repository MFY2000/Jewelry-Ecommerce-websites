<?php 
    function aboutSection($root){
  return "<!-- about start -->
  <section class='about'>
          <div class='container'>
              <div class='row'>
                  <div class='col-md-6'>
                      <div class='about_side_1'>
                          <h3 class='primaryHeading'>About us</h3>
                          <h1 class='secondaryHeading'>Where Class</br>Meets Glamour</h1>
                          <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                          <p class='primaryParagraph'>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                              unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                          </p>
                          <a href='$root/Pages/aboutus.php' class='btnStyle'>Learn More</a>
                      </div>
                  </div>
                  <div class='col-md-6'>
                      <div class='about_side_2'>
                          <img src='$root/images/Product/aboutPic1.png' alt='about pic 1'>
                          <img src='$root/images/Product/aboutPic2.png' alt='about pic 2'>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about end -->";
}


?>