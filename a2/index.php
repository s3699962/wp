<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Shoe Stack</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body>
<!-- Header section including logo, brand name, and login button -->
<div class="topHeader">
  <header>
    <div class="logo">
      <a href="index.php">
        <img src="images/logo_and_Name.png" class="logoImage">
      </a>
    </div>
  </header>
  <div>
    <a href="login.php"><span class="button">LOGIN</span></a>
  </div>
</div>

<!-- navigation bar with class=active for the home page. NOTE: line item "heels" links to products.php. Other links are just extra pages I created. -->
<nav>
  <ul class="navList">
    <li class="navItems home"><a class="active" href="index.php">HOME</a></li>
    <li class="navItems thisSeason"><a href="new_season.php">THIS SEASON</a></li>
    <li class="navItems heels"><a href="products.php">HEELS</a></li>
    <li class="navItems boots"><a href="boots.php">BOOTS</a></li>
    <li class="navItems flats"><a href="flats.php">FLATS</a></li>
    <li class="navItems contactUs"><a href="contact_us.php">CONTACT US</a></li>
  </ul>
  </ul>
</nav>

<!-- Main section of the webpage, broken up into 2 columns -->
<main>
  <!-- left column on the webpage, including new Season products and about us section. -->
  <div class="leftColumn">
    <a href="new_season.php">
      <div id="newThisSeason">
        <h3>See What's New This Season</h3>
        <div class="gallery">
          <img src="images/shoe img1.jpg">
          <img src="images/shoe img5.jpg">
          <img src="images/shoe img2.jpg">
        </div>
      </div>
    </a>

    <div id="aboutUs">
      <h3 class="panelTitle">ABOUT US</h3>
      <div class="aboutPanelContent">
        <img id="aboutUsImage" src="images/aboutUs.png">
        <article id="aboutUsText">
          <p>We started our love affair with shoes a long time ago and it just gets stronger year after year! We are your number 1 shopping destination for
            fashion footwear, growing from one humble store in Melbourne to over 200 stores Australia-wide. We are dedicated to high quality products that look
            beautiful and makes you feel confident and comfortable. We live and breathe
            leather boots, sassy flats, hot heels and summery sandals all of which give us our stylish edge every season. </p>
        </article>
      </div>
    </div>
  </div>
  <!-- Smaller right hand side column including sections for subscribing by email and social media links (currently just images). NOTE: these links are not active. -->
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
        <!-- this anchor is not active -->
        <h2 id="register"><a href="#register">REGISTER</a></h2>
      </form>
    </div>
  </div>
</main>

<footer>
  <div id="footerText">
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
  </div>
</footer>

</body>
</html>

