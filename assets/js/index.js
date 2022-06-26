function counter(id, value, condition, limit) {
  var element = document.getElementById(id);
  var actionDone = false;

  if (condition && element.innerHTML > limit) {
    element.innerHTML = -(-element.innerHTML - value);
    actionDone = true;
  } else if (element.innerHTML < limit) {
    element.innerHTML = -(-element.innerHTML - value);
    actionDone = true;
  }

  addToCart(id, element.innerHTML);
  return actionDone;
}

function addToCart(id, quantity) {
  localStorage.setItem(id, quantity);
}

function counterChnage(id, condition, limit) {
  var change = condition ? -1 : 1;
  var price = parseInt(document.getElementById("Price_" + id).innerHTML);
  var ProductTotal = document.getElementById("productTotal_" + id);
  var CartTotal = document.getElementById("CartTotal");

  actionDone = counter("Cart_" + id, change, condition, limit);

  if (actionDone) {
    ProductTotal.innerHTML = parseInt(ProductTotal.innerHTML) + price * change;
    CartTotal.innerHTML = parseInt(CartTotal.innerHTML) + price * change;
  }
}


