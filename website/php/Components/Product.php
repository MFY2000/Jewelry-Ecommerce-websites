<?php 



function getProduct($root,$NoOfProduct) {
  
  $productCard = "
  <div class='col-md-3 col-sm-6 col-xs-6'>
    <img src='$root/images/productPic1.png' alt='product pic 1'>
    <p>your Heading here</p>
  </div>";
  
    $Product = "";
    for ($i=0; $i < $NoOfProduct; $i++)
      $Product = $Product.$productCard;
    return $Product;
  }

  function ProductSection($root,$NoOfProduct){
    return " <!-- product start -->
      <section class='product'>
          <div class='container'>
              <div class='row'>
                  <div class='col-md-12'>
                      <div class='productHeader'>
                          <h3 class='primaryHeading'>Product</h3>
                          <h1 class='secondaryHeading'>Our Product</h1>
                          <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                      </div>
                  </div>
              </div>
              <div class='row prrow'>
                  ".getProduct($root,$NoOfProduct)."
              </div>
              <div class='row'>
                  <div class='col-md-12'>
                      <div class='productFooter'>
                          <a class='miniButton' href='$root\Pages\shop.php'>View All</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- product end -->
    
    ";
  }


  function ProductheaderSection($root,$NoOfProduct){
    return "     
      <section class='productPage'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='productHeader'>
                        <h3 class='primaryHeading'>Product</h3>
                        <h1 class='secondaryHeading'>Our Product</h1>
                        <p class='primaryParagraph'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        </p>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='shopmenu'>
                        <a data-toggle='tab' href='' class='active btnStyle'>Latest Products</a>
                        <a data-toggle='tab' href='' class='btnStyle'>Our Premium</a>
                        <a data-toggle='tab' href='' class='btnStyle'>Artifical Products</a>
                    </div>
                </div>
            </div>
            <div class='row prrow'>
                      ".getProduct($root,$NoOfProduct)."
            </div>

            <div class='row'>
                      <div class='col-md-12'>
                          <div class='productFooter'>
                              <a class='miniButton' href='$root\Pages\shop.php'>View All</a>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- product end -->
    
        ";
  }


?>