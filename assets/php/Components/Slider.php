<?php 

function SliderCarousel(){
    return "<section class='banner'>
<div id='productCarousel' class='carousel slide' data-ride='carousel'>
    <ol class='carousel-indicators'>
        <li data-target='#productCarousel' data-slide-to='0' class='active'></li>
        <li data-target='#productCarousel' data-slide-to='1'></li>
        <li data-target='#productCarousel' data-slide-to='2'></li>
    </ol>

    <div class='carousel-inner' role='listbox'>
        <div class='item active'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='banner_center text-center'>
                            <h1>Your Jewlery Is Our Passion</h1>
                            <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p>
                            <a href=''>Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='item'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='banner_center text-center'>
                            <h1>Every Piece Of Jewlery tell a story</h1>
                            <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p>
                            <a href=''>Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='item'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='banner_center text-center'>
                            <h1>Professional are waiting for you</h1>
                            <p class='primaryParagraph'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p>
                            <a href=''>Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class='left carousel-control' href='#productCarousel' role='button' data-slide='prev'>
        <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#productCarousel' role='button' data-slide='next'>
        <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
    </a>
</div>
</section>"; 
}
?>