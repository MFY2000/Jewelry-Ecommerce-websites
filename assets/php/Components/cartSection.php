<?php
    $GLOBALS["totalPrice"] = 0;
    $GLOBALS["id"] = array();


    function getCartRow($root,$db_instant){
        $carts = "";
        
        foreach ($_SESSION['cart'] as $key => $value) {  
            $query = $db_instant->querys->Getquery->Details_Cart. $key;
            $result = $db_instant->getData($query);

            $data = $result->fetch_assoc();

            $GLOBALS["totalPrice"] = $data['Price'] * $value + $GLOBALS["totalPrice"];
            array_push($GLOBALS["id"], $data['PID']);

            $carts = $carts."<tr id='r".$data['PID']."' class='cartRow'>
            <td>
                <div class='price'>
                    <img src='$root/assets/images/Product/".$data['imageName']."' alt='".$data['Title']."' onload='getCartQuantity(".$data['PID'].",".$value.")'/>
                    <p>".$data['Title']."</p>
                </div>
            </td>
            <td class='tdp'>
                <p>$ <span id='Price_".$data['PID']."'>".$data['Price']."</span></p>
            </td>
            <td >
                <div class='cartQuantity'>
                    <a onclick='counterChnage(".$data['PID'].",true, 1)'>-</a>
                    <p id='Cart_".$data['PID']."'>$value</p>
                    <a onclick='counterChnage(".$data['PID'].",false,".$data['Quantity'].")'>+</a>
                </div>
            </td>
            <td class='tdp'>
                <p>$ <span id='productTotal_".$data['PID']."'>".$data['Price']*$value."</span></p>
            </td>
            <td class='tdp'>
                <a href='$root/assets/php/Services/Form/deleteCart.php?ID=".$data['PID']."'><i class='fa fa-trash'></i></a>
            </td>
        </tr>";
     
        }
    
    return $carts;

    }

  function getCart($root,$db_instant){
    return "
    <script>
    function getCartQuantity(id, quantity){
        var oldQuantity = localStorage.getItem('Cart_'+id);
        
        if(quantity != oldQuantity){
            var difference = (oldQuantity-quantity);
            
            if(difference > 0){
                document.getElementById('Cart_'+id).innerHTML = oldQuantity;
                var price = parseInt(document.getElementById('Price_'+id).innerHTML);
                
                setTimeout(() => {
                    var CartTotal = document.getElementById('CartTotal');
                    var ProductTotal = document.getElementById('productTotal_'+id);
                    ProductTotal.innerHTML = parseInt(ProductTotal.innerHTML)+(price * difference);
                    CartTotal.innerHTML = parseInt(CartTotal.innerHTML)+(price * difference);
                }, 1000); 
            }

        }
    }

    function moveTOCheckout(){ 
        var total = document.getElementById('CartTotal').innerHTML;
        window.location.href = `".$root."/assets/php/Services/Form/CheckoutFunction.php?isadd=true&total=`+total;  
    }
    </script>
    <section class='cartPage'>
    <div class='container'>
        <div class='row'>
            <div class='cartmain col-md-12'>
                <table>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    ".getCartRow($root, $db_instant)."
                </table>
            </div>
        </div>
        <div class='cartfooter row'>
            <div class='col-md-12'>
                <a onclick='moveTOCheckout(".json_encode($GLOBALS["id"]).")'  class='btnStyle'>Check Out</a>
                <div>
                    <p>Total : $ <span  id='CartTotal'>".$GLOBALS['totalPrice']."</span></p>
                </div>
            </div>
        </div>
    </div>
    </section>
   
    
    ";
  }
?>