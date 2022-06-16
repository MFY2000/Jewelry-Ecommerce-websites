<?php
  function rating($rating){
    $toReturn = "";
    $i=0;
    for ($i;$i < $rating; $i++) { 
        $toReturn = $toReturn."<li><i class='fa fa-star'></i></li>";
    }   

    return $toReturn.($rating - $i > 0 ? "<li><i class='fa fa-star-half-o'></i></li>":"");
  }


  function getDetails($root, $reslt)
  {
    $data = $reslt->fetch_assoc();
    print_r($data);
    return "<!-- product start -->
    <section class='productDetialsPage'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div>
                        <div class='slider slider-for'>
                            <img src='$root/assets/images/Product/".$data['imageName']."' alt='product pic 1'> 
                        </div>
                        
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='productdeitalsInfo'>
                        <h3 class='primaryHeading'>".$data['Title']."</h3>
                        <div class='rating'>
                            <ul>".rating($data['Rating'])."</ul>
                        </div>
                        <h1 class='secondaryHeading'>$ ".$data['Price']."</h1>
                        <p class='primaryParagraph'>".$data['Details']."</p>
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
                            <p>".$data['Details']."</p>
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

