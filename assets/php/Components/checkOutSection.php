<?php

  function getCheckOut()
  {
    return "
    <!-- product start -->
    <section class='cartPage'>
        <div class='container'>
            <div class='row'>
                <div class='checkoutheader col-md-12'>
                    <ul>
                        <li>Item</li>
                        <div>
                            <li>Quantity</li>
                            <li>Price</li>
                            <li>Total Price</li>
                        </div>
                    </ul>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='checkOutRow row'>
                        <div class='col-md-6'>
                            <div class='checkOutinfo'>
                                <img src='./images/productPic1.png' alt='product pic 1' />
                                <div>
                                    <p class='primaryHeading'>Lorem ipsum</p>
                                    <p class='secondaryHeading'>Lorem ipsum dolor sit amet,</p>
                                    <p class='primaryParagraph'>Lorem ipsum dolor,</p>
                                </div>
                            </div>
                        </div>
                        <div class='checkOutprice col-md-6'>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>0</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                            <div class='money'>
                                <p>310 Rs</p>
                                <p>350 Rs</p>
                            </div>
                            <div class='dfco'>
                                <a href=''><i class='fa fa-trash'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class='checkOutRow row'>
                        <div class='col-md-6'>
                            <div class='checkOutinfo'>
                                <img src='./images/productPic4.png' alt='product pic 1' />
                                <div>
                                    <p class='primaryHeading'>Lorem ipsum</p>
                                    <p class='secondaryHeading'>Lorem ipsum dolor sit amet,</p>
                                    <p class='primaryParagraph'>Lorem ipsum dolor,</p>
                                </div>
                            </div>
                        </div>
                        <div class='checkOutprice col-md-6'>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>0</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                            <div class='money'>
                                <p>310 Rs</p>
                                <p>350 Rs</p>
                            </div>
                            <div class='dfco'>
                                <a href=''><i class='fa fa-trash'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class='checkOutRow row'>
                        <div class='col-md-6'>
                            <div class='checkOutinfo'>
                                <img src='./images/productPic4.png' alt='product pic 1' />
                                <div>
                                    <p class='primaryHeading'>Lorem ipsum</p>
                                    <p class='secondaryHeading'>Lorem ipsum dolor sit amet,</p>
                                    <p class='primaryParagraph'>Lorem ipsum dolor,</p>
                                </div>
                            </div>
                        </div>
                        <div class='checkOutprice col-md-6'>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>0</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                            <div class='money'>
                                <p>310 Rs</p>
                                <p>350 Rs</p>
                            </div>
                            <div class='dfco'>
                                <a href=''><i class='fa fa-trash'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='checkOutbottom row'>
                        <div class='cobc1 col-md-6'>
                            <h3>Checkout Summery</h3>
                            <p class='primaryParagraph'>Lorem ipsum dolor sit amet,Lorem ipsumdolor sit amet Lorem ipsum dolor sit amet,Lorem ipsumdolor sit amet Lorem ipsum dolor sit amet,</p>
                            <p class='copanh'>Have a copan code ? </p>
                            <div class='contactfeilds'>
                                <form>
                                    <input class='contactInput' type='email' placeholder='Please enter your Copan Code'>
                                    <button class='btnStyle'><i class='fa fa-arrow-right'></i></button>
                                </form>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='totalPrice'>
                                <div class='thp row'>
                                    <div class='col-md-6 col-sm-6 col-xs-6'>
                                        <div class='th'>Sub total</div>
                                        <div class='th'>Tax</div>
                                    </div>
                                    <div class='col-md-6 col-sm-6 col-xs-6'>
                                        <div class='th2'>310 Rs</div>
                                        <div class='th2'>50 Rs</div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='divider'></div>
                                    </div>
                                </div>
                                <div class='thp row'>
                                    <div class='col-md-6 col-sm-6 col-xs-6'>
                                        <div class='th'>Total</div>
                                    </div>
                                    <div class='col-md-6 col-sm-6 col-xs-6'>
                                        <div class='th2'>370 Rs</div>
                                    </div>
                                </div>
                                <div class='chr row'>
                                    <div class='col-md-12'>
                                        <a href='' class='btnStyle'>Check Out</a>
                                    </div>
                                </div>
                                <div class='chr row'>
                                    <div class='chrh col-md-12 text-center'>
                                        <a href='' class='chra'>Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
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