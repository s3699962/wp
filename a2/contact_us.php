<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/contact_us_page.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body id="contactPage">

<div class="topHeader">
  <header>
    <div class="logo">
      <a href="index.php">
        <img src="images/logo_and_Name.png" class="logoImage">
      </a></div>
  </header>
  <div>
    <a href="login.php"><span class="button">LOGIN</span></a>
  </div>

</div>

<nav>
  <ul class="navList">
    <li class="navItems home"><a href="index.php">HOME</a></li>
    <li class="navItems thisSeason"><a href="new_season.php">THIS SEASON</a></li>
    <li class="navItems heels"><a href="products.php">HEELS</a></li>
    <li class="navItems boots"><a href="boots.php">BOOTS</a></li>
    <li class="navItems flats"><a href="flats.php">FLATS</a></li>
    <li class="navItems contactUs"><a class="active" href="contact_us.php">CONTACT US</a></li>
  </ul>
</nav>

<main>
  <div class="leftColumn">
    <h3 class="panelTitle">CONTACT DETAILS</h3>

    <div class="panelContent">
      <h3>Phone:</h3>
      <p>1300 123 456</p>
      <h3>Email:</h3>
      <p>hello@shoestack.com.au</p>
    </div>
  </div>
  <div class="middleColumn">
    <form class="loginForm" name="contactUsForm">
      <h2>CONTACT US</h2>
      <h3>First Name:</h3>
      <input class="loginFormBox" type="text" name="fname" placeholder="ENTER YOUR FIRST NAME"><br>

      <h3>Last Name:</h3>
      <input class="loginFormBox" type="text" name="lName" placeholder="ENTER YOUR LAST NAME"><br>
      <h3>Phone Number:</h3>
      <input class="loginFormBox" type="text" name="phone" placeholder="ENTER YOUR PHONE NUMBER"><br>
      <h3>Email:</h3>
      <input class="loginFormBox" type="text" name="email" placeholder="ENTER YOUR EMAIL ADDRESS"><br>
      <h3>Your Message:</h3>
      <textarea class="loginFormBox" rows="10" cols="30" type="text" name="message" placeholder="ENTER YOUR MESSAGE"></textarea><br>
      <div>
        <input class="submitButton" type="submit" value="SUBMIT">
      </div>
    </form>

  </div>
  <div class="rightColumn">
    <h3 class="panelTitle">SOCIAL</h3>

    <div class="panelContent">
      <h2>There is too much going on in the world of shoes to add it all on this website, so follow us here:</h2>

      <div>
        <img src="images/facebook icon.png" class="iconsImage">
        <img src="images/instagram icon.png" class="iconsImage">
        <img src="images/pinterest icon.png" class="iconsImage">
        <img src="images/twitter icon.png" class="iconsImage">
        <img src="images/youtube icon.png" class="iconsImage">
      </div>
    </div>
  </div>

  <div class="rightColumn">
    <h3 class="panelTitle">STAY IN THE LOOP</h3>

    <div class="panelContent">
      <div>
        <img src="images/email icon.png" class="iconsImage nonInteractable">
      </div>
      <h2>Subscribe to your newsletter to get the latest on new styles, sales & exclusive deals. </h2>
      <form>
        <input class="inputFormBox" type="text" value name="email" placeholder="EMAIL">
        <h2 id="register"><a href="#register">REGISTER</a></h2>
      </form>
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