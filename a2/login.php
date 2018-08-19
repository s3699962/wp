<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Login</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/login_page.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body id="loginPage">
<script>
  // function to validate the login form to ensure there is an email and password entered before submitting.
  function formValidate() {
    var emailAddress = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;
    var valid = true;
    var element = document.getElementsByClassName("errorMessage")[0];
    if (emailAddress == "") {
      element.innerHTML = "Please enter a valid email address";
      element.className = "errorMessage displayed";
      valid = false;
    }

    if (password == "") {
      element.innerHTML = "Please enter a valid password";
      element.className = "errorMessage displayed";
      valid = false;
    }

    return valid;
  }
</script>
<!-- Header section including logo, brand name, and login button -->
<div class="topHeader">
  <header>
    <div class="logo">
      <a href=" index.php">
        <a href=" index.php">
          <img src="images/logo_and_Name.png" class="logoImage">
        </a> </a>
    </div>
  </header>
  <div>
    <a href="login.php"><span class="button">LOGIN</span></a>
  </div>
</div>

<!-- navigation bar. NOTE: line item "heels" links to products.php. Other links are just extra pages I created. -->
<nav>
  <ul class="navList">
    <li class="navItems home"><a href="index.php">HOME</a></li>
    <li class="navItems thisSeason"><a href="new_season.php">THIS SEASON</a></li>
    <li class="navItems heels"><a href="products.php">HEELS</a></li>
    <li class="navItems boots"><a href="boots.php">BOOTS</a></li>
    <li class="navItems flats"><a href="flats.php">FLATS</a></li>
    <li class="navItems contactUs"><a href="contact_us.php">CONTACT US</a></li>
  </ul>
</nav>
<!-- Main section of the webpage, broken up into 3 columns -->
<main>
  <!-- left column on the webpage, including member account options. NOTE: These are just placeholders for links.  -->
  <div class="leftColumn">
    <h3 class="panelTitle">MEMBER PROFILE</h3>

    <div class="panelContent">
      <h3 class="loginOption">Login</h3>
      <h3 class="loginOption">Register</h3>
      <h3 class="loginOption">Forgot Password</h3>
    </div>
  </div>

  <!-- middle column on the webpage, including the login in form. -->
  <div class="middleColumn">
    <form class="loginForm" name="loginForm" method="post" target="_blank" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"
          onsubmit="return formValidate();">
      <h2>LOGIN</h2>
      <h3>Email:</h3>
      <input class="loginFormBox" type="text" name="email" placeholder="ENTER YOUR EMAIL ADDRESS"><br>

      <h3>Password:</h3>
      <input class="loginFormBox" type="password" name="password" placeholder="ENTER YOUR PASSWORD"><br>
      <div>
        <input class="submitButton" type="submit" value="SUBMIT">
      </div>
      <p class="errorMessage">default error message</p>
    </form>

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