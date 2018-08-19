<?php
function multi_product_module($products)
{
    top_module("Shoe Stack: Products", "productPage");
    echo <<<"OUTPUT"
<link type="text/css" rel="stylesheet" href="css/product_page.css">

<!-- Main section of the webpage, broken up into 2 main columns -->
<div class="row">
  <!-- first column includes the filter field for the products. Currently it is a placeholder and does not function. -->
  <div class="col-3 filterColumn">
    <h3 class="panelTitle">FILTER</h3>
    <div class="panelContent">
      <h2 class="filterListHeading">By Size</h2>
      <ul class="filterList">
        <li>6</li>
        <li>6.5</li>
        <li>7</li>
        <li>7.5</li>
        <li>8</li>
        <li>8.5</li>
        <li>9</li>
        <li>9.5</li>
        <li>10</li>
        <li>10.5</li>
      </ul>
    </div>
    <div class="panelContent">
      <h2 class="filterListHeading">By Colour</h2>
      <ul class="filterList">
        <li class="red lessBright"></li>
        <li class="blue lessBright"></li>
        <li class="green lessBright"></li>
        <li class="black lessBright"></li>
        <li class="purple lessBright"></li>
        <li class="grey lessBright"></li>
        <li class="pink lessBright"></li>
        <li class="white lessBright"></li>
        <li class="yellow lessBright"></li>
        <li class="orange lessBright"></li>
      </ul>
    </div>
  </div>
  <!-- The right section is further split into 3 columns to display the products in a grid. -->
    <div class="col-9 rightColumn">
      <div id="productList">
        <h3>Heels</h3>
        <p>Whatever the time of the year and whatever the occasion, heels make any woman feel sexy and confident! Discover our latest collection of on-trend
          heels. Whether you prefer to wear low, mid or high heels or wedges, you will find that perfect pair that will give you the ideal lift you’re after.
        </p>  
OUTPUT;
//    displaying all the products in a grid.
    foreach ($products as $key => $productOptions) {
        $product = (reset($productOptions));
        echo "<div class='col-4 productItem'>";
        echo "<a href='products.php?id=$key'>";
        echo "<img src='images/$product[Image]'>";
        echo "<h4 class='productHeading'>$product[Title]</h4>";
        echo "<h4 class='productPrice'>$product[Price]</h4>";
        echo "</a>";
        echo "</div>";
    }
    echo <<<"OUTPUT"
    </div>
  </div>
</div>    
OUTPUT;
}
?>
