<?php
function product_module($id, $productOptions)
{
    $product = (reset($productOptions));
    $title = $product[Title];
    $image = $product[Large_Img];
    $description = $product[Description];
    $price = $product[Price];



    top_module("Shoe Stack: ".$title, "singleProductPage");

    echo <<<"OUTPUT"

<link type="text/css" rel="stylesheet" href="css/single_product_page.css">
<script type="text/javascript" rel="javascript" src="products.js"></script>


  <!-- Left column includes a large image of the product -->
  <div class="leftColumn">
    <div class="singleProduct">
      <img class="productImgLarge" src="images/$image">
    </div>
  </div>
  <!-- right column include the product name, price, description and the product form -->
  <div class="rightColumn">
    <div>
      <h2 class="singleProductHeading">$title</h2>
    </div>
    <div>
      <!-- product form that validates that there is a quantity before sumbmitting. -->
      <form class="productForm productDescription" name="cartForm" method="post" target="_self"
            action="cart.php" onsubmit="return formValidate();">
        <!-- unique product id that does not submit with the form. -->
        <input class="prodId" name="id" type="hidden" value=$id><br>
        <!-- product price disabled so that it does not submit -->
        <span id="original-price">$price</span>
        <div class="productDescription">
          <span class = "price">$<input class="productPrice" disabled="disabled" name= "price" value="$price"></span>
        </div>
OUTPUT;

//    !--Select options for product size, with a custom arrow added for the drop down list.  -->
    echo "<h3>Select a Size:</h3>";
    echo "<select class='sizeSelect' name='oid'>";
    foreach ($productOptions as $key => $prodDetails)
    {
        echo "<option class='selectOption' value='$key'>$key</option>";
    }
    echo "</select>";


    echo <<<"OUTPUT"
        <div class="selectOverlay">
          <i class="fa fa-chevron-down"></i>
        </div>
        <h3>Quantity:</h3>
        <!-- Quantity field with + and - buttons that increase or decrease input by 1 -->
        <button class="quantityButton quantityLeft" onclick="minusQuantity(event) "><i class="fa fa-minus"></i></button>
        <input class="quantity" type="text" oninput="inputValidate()" name="qty" min="0" max="100" value="1">
        <button class="quantityButton quantityRight" onclick="addQuantity(event)"><i class="fa fa-plus"></i></button>
        <div>
          <input class="submitButton" name="add" type="submit" value="ADD TO CART">
        </div>
        <!-- Error message that displays if the formValidate() return false. -->
        <p class="errorMessage">.</p>
      </form>

    </div>
    <div class="productDescriptionText productDescription">
      <h3 class="descriptionTitle">DESCRIPTION</h3>
      <p>$description</p>
      
    </div>
  </div>
  </div>
OUTPUT;
}

?>


