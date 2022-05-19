<?php
  
  function getDetails($root)
  {
    return "<!-- product start -->
    <section class='productDetialsPage'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div>
                        <div class='slider slider-for'>
                            <img src='$root/images/productPic1.png' alt='product pic 1'>
                            <img src='$root/images/productPic2.png' alt='product pic 1'>
                            <img src='$root/images/productPic3.png' alt='product pic 1'>
                            <img src='$root/images/productPic4.png' alt='product pic 1' />
                        </div>
                        <div class='productMoreImages slider slider-nav'>
                            <img src='$root/images/productPic1.png' alt='product pic 1' />
                            <img src='$root/images/productPic2.png' alt='product pic 1' />
                            <img src='$root/images/productPic3.png' alt='product pic 1' />
                            <img src='$root/images/productPic4.png' alt='product pic 1' />
                        </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='productdeitalsInfo'>
                        <h3 class='primaryHeading'>Round Neckless</h3>
                        <div class='rating'>
                            <ul>
                                <li><i class='fa fa-star'></i></li>
                                <li><i class='fa fa-star'></i></li>
                                <li><i class='fa fa-star'></i></li>
                                <li><i class='fa fa-star'></i></li>
                                <li><i class='fa fa-star'></i></li>
                                <li><i class='fa fa-star'></i></li>
                            </ul>
                        </div>
                        <h1 class='secondaryHeading'>300 Rs</h1>
                        <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class='quantity'>
                            <div class='row'>
                                <p>Quantity</p>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc' class='incrementer'>0</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                        </div>
                        <div class='deliveryOptions'>
                            <p class='primaryParagraph'><i class='fa fa-truck-moving'></i>&nbsp;&nbsp;Lorem ipsum dolor, sit amet consectetur</p>
                            <p class='primaryParagraph'><i class='fa fa-tags'></i>&nbsp;&nbsp;Lorem ipsum dolor, sit amet consectetur</p>
                        </div>
                        <a href='cart.php' class='btnStyle'>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class='detialsFooter'>
                <div class='row'>
                    <div class='col-md-12'>
                        <a href='' class='btnStyle'>Shop Now</a>
                        <a href='' class='btnStyle'>Review</a>
                        <a href='' class='btnStyle'>Additional Info</a>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='divider'></div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='bottomparagraph'>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore harum quaerat dolorem cum et, quis delectus quia, necessitatibus asperiores reiciendis, aliquid aperiam rem vero hic labore explicabo iusto illum doloribus amet?
                                Eius, harum itaque. Molestiae repellat non error exercitationem cum optio suscipit, saepe laboriosam recusandae reprehenderit labore aspernatur dignissimos repudiandae amet quia doloribus ratione eos eligendi iure itaque
                                facere, quasi nulla! Voluptate assumenda officiis quae ut! Atque similique debitis modi! Illo repellendus mollitia eligendi, assumenda iure reprehenderit qui ad aliquam molestias voluptate esse accusantium quos corporis
                                ratione exercitationem. Eaque cupiditate, molestias debitis fuga tempora assumenda dolores? Quia perferendis adipisci odit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->
";
  }


?>

