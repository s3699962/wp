<?php
require_once('tools.php');
top_module("Shoe Stack: Contact Us", "contactPage");
?>

  <link id='stylecss' type="text/css" rel="stylesheet" href="css/contact_us_page.css">

  <!-- left column on the webpage, including contact details options.  -->
  <div class="leftColumn">
    <h3 class="panelTitle">CONTACT DETAILS</h3>

    <div class="panelContent">
      <h3>Phone:</h3>
      <p>1300 123 456</p>
      <h3>Email:</h3>
      <p>hello@shoestack.com.au</p>
    </div>
  </div>
  <!-- middle column on the webpage, including the login in form. NOTE: does not actually work or submit.-->
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

<?php end_module(); ?>