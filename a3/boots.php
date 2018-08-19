<?php
require_once('tools.php');
top_module("Shoe Stack: Boots", "productPage");
?>
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
        <li class="white lessBrightn"></li>
        <li class="yellow lessBright"></li>
        <li class="orange lessBright"></li>

      </ul>
    </div>
  </div>
  <!-- The right section is further split into 3 columns to display the products in a grid. -->
  <div class="col-9 rightColumn">
    <div id="productList">
      <h3>Boots</h3>
      <p>Boots speak to every style personality and are a must for any wardrobe! Our collection of beautiful Shoe Stack leather boots are stylish as standard.
        Offering a diverse range of over the knee boots, ankle boots and knee boots to take you through season to season in style.
      </p>
      <!-- List of products with title, image and price. NOTE: all products links to products.php -->
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot1.jpg">
          <h4 class="productHeading">Charlie Flat Long Boot</h4>
          <h4 class="productPrice">$249.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot2.jpg">
          <h4 class="productHeading">Cameron Flat Lace-up Boot</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot3.jpg">
          <h4 class="productHeading">Diana Mid Heel Ankle Boot</h4>
          <h4 class="productPrice">$119.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot4.jpg">
          <h4 class="productHeading">Tina Flat Over-the-knee Boot</h4>
          <h4 class="productPrice">$399.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot5.jpg">
          <h4 class="productHeading">Pixie Mid Heel Ankle Boot</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/boot6.jpg">
          <h4 class="productHeading">Amy Flat Ankle Boot</h4>
          <h4 class="productPrice">$199.95</h4>
        </a>
      </div>
    </div>
  </div>
</div>

<?php end_module(); ?>
