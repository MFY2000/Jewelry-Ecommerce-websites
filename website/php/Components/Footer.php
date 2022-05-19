<?php
    function FooterSection($root){
        return "<!-- footer start -->
                    <footer>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class='footerDivider'></div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <p class='text-center'>@".date("Y")." <b>Domain</b> All Rights Reserved</p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <ul>
                                        <li><a href='$root/index.php'>Home</a></li>
                                        <li><a href='$root/Pages/aboutus.php'>About Us</a></li>
                                        <li><a href='$root/Pages/shop.php'>Shop</a></li>
                                        <li><a href='$root/Pages/contactus.php'>ContactUs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <ul>
                                        <li><a href=''><i class='fab fa-twitter'></i></a></li>
                                        <li><a href=''><i class='fab fa-facebook-f'></i></a></li>
                                        <li><a href=''><i class='fab fa-linkedin-in'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                <!-- footer end -->";
    }
?>
