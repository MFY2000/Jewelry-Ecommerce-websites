<?php


    function getCartCheckout($root,$db_instant){
        $checkouCart = "";
        
        foreach ($_SESSION['cart'] as $key => $value) {  
            $query = $db_instant->querys->Getquery->Details_Cart. $key;
            $result = $db_instant->getData($query);
            
            $data = $result->fetch_assoc();

            $checkouCart = $checkouCart."<div class='checkOutRow row' id='r".$data['PID']."'>
                <div class='col-md-6'>
                    <div class='checkOutinfo'>
                        <img src='$root/assets/images/Product/".$data['imageName']."' alt='".$data['Title']."' onload='setTimeout(() => {getCartQuantity(".$data['PID'].",".$value.")}, 2000);'  />
                        <div>
                            <p class='primaryHeading'>".$data['Title']."</p>
                            <p class='secondaryHeading'>".substr($data['Details'], 0, 30)."</p>
                        </div>
                    </div>
                </div>
                <div class='checkOutprice col-md-6'>
                    <div class='cartQuantity'>
                        <a onclick='counterChnage(".$data['PID'].",true, 1)'>-</a>
                        <p  id='Cart_".$data['PID']."'>$value</p>
                        <a onclick='counterChnage(".$data['PID'].",false,".$data['Quantity'].")'>+</a>
                    </div>
                    <div class='money'>
                        <p>$ <b id='Price_".$data['PID']."'>".$data['Price']."</b></p>
                        <p>$ <b id='productTotal_".$data['PID']."'>".$data['Price']*$value."</b></p>
                    </div>
                    <div class='dfco'>
                        <a ><i class='fa fa-trash'></i></a>
                    </div>
                </div>
                </div>";
        
        }

        return $checkouCart;
    }

    function getCheckOut($root,$db_instant){
        return "<!-- product start -->

    <script>
       function getCartQuantity(id, quantity){
        var oldQuantity = localStorage.getItem('Cart_'+id);
        
        if(quantity != oldQuantity){
            var difference = (oldQuantity-quantity);
            
            if(difference > 0){
                document.getElementById('Cart_'+id).innerHTML = oldQuantity;
                setTimeout(() => {
                    var price = parseInt(document.getElementById('Price_'+id).innerHTML);
                    var CartTotal = document.getElementById('CartTotal');
                    var ProductTotal = document.getElementById('productTotal_'+id);
                    console.log(ProductTotal.innerHTML);
                    ProductTotal.innerHTML = parseInt(ProductTotal.innerHTML)+(price * difference);
                    document.getElementById('Subtotal').innerHTML = parseInt(ProductTotal.innerHTML)+(price * difference);
                }, 1000); 
            }
        }
        setTimeout(() => {CheckoutTotal();}, 1000); 
    }
    
        function onclickableHref(id,price){
            var quantity = document.getElementById('productTotal_'+id);
            window.location.href = '$root/assets/php/Services/Form/CheckoutFunction.php?isadd=false&id='+id+'&p1='+price+'&p2='+quantity;
        }

        function CheckoutTotal() {
            
            var Subtotal = parseInt(getValue('Subtotal')),
                Discount = parseInt(getValue('Discount')),
                Taxtotal = parseInt(getValue('Taxtotal'));
              document.getElementById('total').innerHTML = (Subtotal + Discount + Taxtotal);

          }
          
        function getValue(title){
            return parseInt(document.getElementById(title).innerHTML);
        }
    </script>
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
                                <li>Delete</li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        ".getCartCheckout($root,$db_instant)."
                    </div>
                </div>
                
        <!-- product end -->";
  }

?>