<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Single Product</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link type="text/css" rel="stylesheet" href="css/single_product_page.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body id="singleProductPage">
<script>
  // function to validate the product form to ensure there is a quantity entered before submitting.
  function formValidate() {
    var text;
    var quantityString = document.forms["cartForm"]["qty"].value;
    var quantityInt = parseInt(quantityString);
    var element = document.getElementsByClassName("errorMessage")[0];
    // console.log(x.constructor.name);
    if (!Number.isInteger(quantityInt)) {
      element.innerHTML = "Please enter a quantity before submitting.";
      element.className = "errorMessage displayed";
      return false;
    }

  }

  // function to increase the quantity by 1 when the + button is clicked.
  function addQuantity(event) {
    event.preventDefault();
    var quantityString = document.forms["cartForm"]["qty"].value;
    if (quantityString !== "") {
      var quantityInt = parseInt(quantityString);
    } else quantityInt = 0;
    var newVal = quantityInt + 1;
    var newValString = newVal.toString();
    document.getElementsByName("qty")[0].value = newValString;
  }

  // function to decrease the quantity by 1 when the + button is clicked.
  function minusQuantity(event) {
    event.preventDefault();
    var quantityString = document.forms["cartForm"]["qty"].value;
    if (quantityString !== "") {
      var quantityInt = parseInt(quantityString);
    } else quantityInt = 0;
    if (quantityInt > 0) {
      var newVal = quantityInt - 1;
    } else newVal = quantityInt;
    var newValString = newVal.toString();
    document.getElementsByName("qty")[0].value = newValString;

  }

  // function to validate the input for quantity so that only positive integers can be added.
  function inputValidate() {
    var quantityString = document.forms["cartForm"]["qty"].value;
    if (quantityString >= 0) {
      document.getElementsByName("qty")[0].value = quantityString;
    } else document.getElementsByName("qty")[0].value = 1;

  }
</script>
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
<!-- Main section of the webpage, broken up into 2 columns -->
<main>
  <!-- Left column includes a large image of the product -->
  <div class="leftColumn">
    <div class="singleProduct">
      <img class="productImgLarge" src="images/janice1.jpg">
    </div>
  </div>
  <!-- right column include the product name, price, description and the product form -->
  <div class="rightColumn">
    <div>
      <h2 class="singleProductHeading">Janice White High Heel Pump</h2>
    </div>
    <div>
      <!-- product form that validates that there is a quantity before sumbmitting. -->
      <form class="productForm productDescription" name="cartForm" method="post" target="_blank"
            action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" onsubmit="return formValidate();">
        <!-- unique product id that does not submit with the form. -->
        <input class="prodId" name="id" type="hidden" value="heel1"><br>
        <!-- product price disabled so that it does not submit -->
        <div class="productDescription">
          <input class="productPrice" disabled="disabled" value="$149.95">
        </div>
        <!-- Select options for product size, with a custom arrow added for the drop down list.  -->
        <h3>Select a Size:</h3>
        <select class="sizeSelect" name="option">
          <option class="selectOption" value="6">6</option>
          <option class="selectOption" value="6.5">6.5</option>
          <option class="selectOption" value="7">7</option>
          <option class="selectOption" value="7.5">7.5</option>
          <option class="selectOption" value="8">8</option>
          <option class="selectOption" value="8.5">8.5</option>
          <option class="selectOption" value="9">9</option>
          <option class="selectOption" value="9.5">9.5</option>
          <option class="selectOption" value="10">10</option>
          <option class="selectOption" value="10.5">10.5</option>
        </select>
        <div class="selectOverlay">
          <i class="fa fa-chevron-down"></i>
        </div>
        <h3>Quantity:</h3>
        <!-- Quantity field with + and - buttons that increase or decrease input by 1 -->
        <button class="quantityButton quantityLeft" onclick="minusQuantity(event)"><i class="fa fa-minus"></i></button>
        <input class="quantity" type="text" oninput="inputValidate()" name="qty" min="0" max="100" value="1">
        <button class="quantityButton quantityRight" onclick="addQuantity(event)"><i class="fa fa-plus"></i></button>
        <div>
          <input class="submitButton" type="submit" value="ADD TO CART">
        </div>
        <!-- Error message that displays if the formValidate() return false. -->
        <p class="errorMessage">.</p>
      </form>

    </div>
    <div class="productDescriptionText productDescription">
      <h3 class="descriptionTitle">DESCRIPTION</h3>
      <p>This classic pump can do no wrong! Embrace sophistication and class in this stunning style, perfect for any special occasion from summer weddings to
        big nights out!
      <ul>
        <li>Lining: Leather</li>
        <li>Material: Leather</li>
        <li>Sole Material: Man-made</li>
        <li>Heel Height (CM): 10.5</li>
      </ul>
      </p>
    </div>
  </div>
  </div>
</main>

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