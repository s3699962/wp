<?php
require_once('tools.php');
top_module("Shoe Stack: Flats", "productPage");
?>
<!-- Keep wireframe.css for debugging, add your css to style.css -->
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
      <h3>Flats</h3>
      <p>The versatility is endless with flats! Flats are great candidates for day wear, with ballet flats being the standout favourite. Comfortable and chic,
        our extensive range includes classic ballet flats, on-trend loafers or statement lace ups.
      </p>
      <!-- List of products with title, image and price. NOTE: all products links to products.php -->
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat1.jpg">
          <h4 class="productHeading">Sierra Pointy Flat</h4>
          <h4 class="productPrice">$249.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat2.jpg">
          <h4 class="productHeading">Zara Bow Flat</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat3.jpg">
          <h4 class="productHeading">Ange Low Wedge Pump</h4>
          <h4 class="productPrice">$119.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat4.jpg">
          <h4 class="productHeading">June Lace Up Flat</h4>
          <h4 class="productPrice">$399.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat5.jpg">
          <h4 class="productHeading">Chloe Lace Up Sandal</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/flat6.jpg">
          <h4 class="productHeading">Cindy Low Wedge Sandal</h4>
          <h4 class="productPrice">$199.95</h4>
        </a>
      </div>
    </div>
  </div>
</div>

<?php end_module(); ?>

