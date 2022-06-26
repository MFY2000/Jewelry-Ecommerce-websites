<?php
  function getcheckoutTotal($root){
    return "
    <script>
    
        function getCartQuantity(id, quantity){

       }
    
       </script>
    <div class='row'>
    <div class='col-md-12'>
        <div class='checkOutbottom row'>
            <div class='cobc1 col-md-6'>
                <h3>Checkout Summery</h3>
                <p class='primaryParagraph'>Lorem ipsum dolor sit amet,Lorem ipsumdolor sit amet Lorem ipsum dolor sit amet,Lorem ipsumdolor sit amet Lorem ipsum dolor sit amet,</p>
                <p class='copanh'>Have a copan code ? </p>
                <div class='contactfeilds'>
                    <form>
                        <input class='contactInput' type='text' name='CopanCode' placeholder='Please enter your Copan Code'>
                        <button class='btnStyle' type='submit'><i class='fa fa-arrow-right'></i></button>
                    </form>
                </div>
            </div>
            <div class='col-md-6'>
                <div class='totalPrice'>
                    <div class='thp row'>
                        <div class='col-md-6 col-sm-6 col-xs-6'>
                            <div class='th'>Sub total</div>
                            <div class='th'>Discount</div>
                            <div class='th'>Tax</div>
                        </div>
                        <div class='col-md-6 col-sm-6 col-xs-6'>
                            <span class='th2'>$ <p id='Subtotal'>".$_SESSION['checkOut']["total"]."</p></span>
                            <span class='th2'>$ <p id='Discount'>0</p></span>
                            <span class='th2'>$ <p id='Taxtotal'>50</p></span>
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
                            <span class='th2'>$ <p id='total'>0</p></span>
                        </div>
                    </div>
                    <div class='chr row'>
                        <div class='col-md-12'>
                            <a href='".$root."/assets/php/Services/Form/BookOrder.php?data=".json_encode($_SESSION['cart'])."&total' class='btnStyle'>Check Out</a>
                        </div>
                    </div>
                    <div class='chr row'>
                        <div class='chrh col-md-12 text-center'>
                            <a href='$root/index.php' class='chra'>Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>";
  }


?>