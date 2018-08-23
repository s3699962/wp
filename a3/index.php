<?php
session_start();
// add tools.php and top_module
require_once('tools.php');
top_module("Shoe Stack", "index");

echo <<<OUTPUT


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

OUTPUT;
//add end module
end_module();
?>

