<?php
  function getCart(){
    return " <section class='cartPage'>
    <div class='container'>
        <div class='row'>
            <div class='cartmain col-md-12'>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr id='r1' class='cartRow'>
                        <td>
                            <div class='price'>
                                <img src='./images/productPic1.png' alt='product pic 1' />
                                <p>Lorem ipsum dolor sit amet,</p>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>300 Rs</p>
                        </td>
                        <td>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>0</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>310 Rs</p>
                        </td>
                        <td class='tdp'>
                            <a href=''><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                    <tr class='cartRow'>
                        <td>
                            <div class='price'>
                                <img src='./images/productPic3.png' alt='product pic 1' />
                                <p>Lorem ipsum dolor sit amet,</p>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>300 Rs</p>
                        </td>
                        <td>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>5</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>310 Rs</p>
                        </td>
                        <td class='tdp'>
                            <a href=''><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                    <tr class='cartRow'>
                        <td>
                            <div class='price'>
                                <img src='./images/productPic4.png' alt='product pic 1' />
                                <p>Lorem ipsum dolor sit amet,</p>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>300 Rs</p>
                        </td>
                        <td>
                            <div class='cartQuantity'>
                                <a onclick='decrementer()'>-</a>
                                <p id='quantityInc'>5</p>
                                <a onclick='incrementer()'>+</a>
                            </div>
                        </td>
                        <td class='tdp'>
                            <p>310 Rs</p>
                        </td>
                        <td class='tdp'>
                            <a href=''><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class='cartfooter row'>
            <div class='col-md-12'>
                <a href='checkout.html' class='btnStyle'>Check Out</a>
                <div>
                    <p>Total : 930 Rs</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    ";
  }
?>