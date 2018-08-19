<?php
session_start();
require_once('tools.php');
top_module("Shoe Stack: Your Cart", "cartPage");
echo "<link type='text/css' rel='stylesheet' href='css/product_page.css'>";
echo "<link type='text/css' rel='stylesheet' href='css/cart_page.css'>";


$products = get_products();
if (isset ($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
    //check if qty and product Id are valid
    $id = $_POST['id'];
    $oid = $_POST['oid'];
    $product = get_product_with_id($products, $id);
    if ($product == null) {
        echo "<h3 class='errorMessage displayed'>This Product is No Longer Available</h3>";
        return;
    }

    if (!isset ($product["options"][$oid])) {
        echo "<h3 class= 'errorMessage displayed'>This Size is No Longer Available</h3>";
        return;
    }
    $qty = (int)$_POST['qty'];
    if ($qty <= 0) {
        echo "<h3 class='errorMessage displayed'>Please Enter a Valid Quantity</h3>";
        return;
    }

    $_SESSION['cart'][$id][$oid] = $qty;
//    $_SESSION['cart'][$id]['qty'] = $qty;

    echo "<div id='productList'>";
    echo "<h3>My Cart</h3>";
    echo "</div>";


    $cartTotal = 0;
    foreach ($_SESSION['cart'] as $key => $cartOptions) {
        foreach ($cartOptions as $size => $quantity) {
            $options = get_product_with_id($products, $key);
            $cartProduct = get_product_options_from_product_with_id($options, $size);
            $image = "$cartProduct[Image]";
            $price = "$cartProduct[Price]";
            $productTotal = number_format((float)($price * $quantity), 2, '.', '');
            $title = "$cartProduct[Title]";

            $cartTotal = ($cartTotal + $productTotal);
            $orderTotal = number_format((float)$cartTotal, 2, '.', '');
            echo <<<"OUTPUT"
    <div class ="cartSection">
      <div class="cartProductHeading">
      <h3>$title</h3>
      </div>
      <div class="cartProductImage">
      <img src="images/$image">
      </div> 
      <div class="cartDetails">
      <h3>SIZE: $size</h3>    
      </div>
      <div class="cartDetails">
      <h3>QTY: $quantity</h3>
      </div>
      <div class="cartPrice">
      <h3>$$productTotal</h3>
      </div>
      
    </div>
OUTPUT;
        }
    }
    echo <<<"OUTPUT"


    <div class="subtotal">
    <h3>ORDER TOTAL: $$orderTotal</h3>
    </div>
    
    <div class="cartButtons">
    <div class="checkoutButton">
    <form method="post" name="cancelForm" action="products.php">
    <input class="cancelButton" name="cancel" type="submit" value="CANCEL">
    </form>
    </div>
    
    <div class="checkoutButton">
        <a href="checkout.php"><span class="submitCartButton">CHECKOUT</span></a>
    </div>
    </div>

OUTPUT;

}
end_module();
