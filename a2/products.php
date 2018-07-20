<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link type="text/css" rel="stylesheet" href="css/product_page.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body id="productPage">
<!-- Header section including logo, brand name, and login button -->
<div class="topHeader">
  <header>
    <div class="logo">
      <a href=" index.php">
        <img src="images/logo_and_Name.png" class="logoImage">
      </a>
    </div>
  </header>
  <div>
    <a href="login.php"><span class="button">LOGIN</span></a>
  </div>
</div>

<!-- navigation bar with class=active for the products.php page. NOTE: line item "heels" links to products.php. Other links are just extra pages I created. -->
<nav>
  <ul class="navList">
    <li class="navItems home"><a href="index.php">HOME</a></li>
    <li class="navItems thisSeason"><a href="new_season.php">THIS SEASON</a></li>
    <li class="navItems heels"><a class="active" href="products.php">HEELS</a></li>
    <li class="navItems boots"><a href="boots.php">BOOTS</a></li>
    <li class="navItems flats"><a href="flats.php">FLATS</a></li>
    <li class="navItems contactUs"><a href="contact_us.php">CONTACT US</a></li>
  </ul>
</nav>

<!-- Main section of the webpage, broken up into 2 main columns -->
<div class="row">
  <!-- first column inlcudes the filter field for the products. Currently it is a placeholder and does not function. -->
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
      <!-- List of products with title, image and price. NOTE: all products links to products.php -->

      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod1.jpg">
          <h4 class="productHeading">Lillian Black Mid Heel</h4>
          <h4 class="productPrice">$169.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod2.jpg">
          <h4 class="productHeading">Janice White High Heel Pump</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod3.jpg">
          <h4 class="productHeading">Jaxx Nude Block Heel</h4>
          <h4 class="productPrice">$119.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod4.jpg">
          <h4 class="productHeading">Shirley Espadrille Wedge</h4>
          <h4 class="productPrice">$99.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod5.jpg">
          <h4 class="productHeading">Catherine Nude Cutout Heel</h4>
          <h4 class="productPrice">$149.95</h4>
        </a>
      </div>
      <div class="col-4 productItem">
        <a href="product.php">
          <img src="images/prod6.jpg">
          <h4 class="productHeading">Jackie Red Block Heel</h4>
          <h4 class="productPrice">$199.95</h4>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<footer>
  <div>&copy;<script>
      document.write(new Date().getFullYear());
    </script>
    Jeanette Roga, S3699962.
  </div>
  <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in
    Melbourne, Australia.
  </div>
  <div>
    <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
  </div>
</footer>

</body>
</html>