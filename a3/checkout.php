<?php
session_start();
require_once('tools.php');
top_module("Shoe Stack: Checkout", "checkoutPage");

// display a checkout form that asks for customer details and credit card information. After Validating the information, if there are errors they appear under the inout field.
echo <<<OUTPUT
<script type="text/javascript" rel="javascript" src="products.js"></script>
<link type="text/css" rel="stylesheet" href="css/checkout_page.css">

<form class="loginForm" name="checkoutForm" method="post" action="receipt.php" onsubmit="checkoutFormValidate()">
      <h2>CHECKOUT</h2>
      <h3>First Name:</h3>
      <input class="loginFormBox" type="text" name="fName" placeholder="ENTER YOUR FIRST NAME"><br>
OUTPUT;

if (isset($_SESSION['errors']['firstName'])) {
    echo "<p class='checkoutError'>Please enter a valid first name.</p>";
}
echo <<<OUTPUT
      <h3>Last Name:</h3>
      <input class="loginFormBox" type="text" name="lName" placeholder="ENTER YOUR LAST NAME"><br>
OUTPUT;
if (isset($_SESSION['errors']['lastName'])) {
    echo "<p class='checkoutError'>Please enter a valid last name.</p>";
}
echo <<<OUTPUT
      <h3>Mobile Number:</h3>
      <input class="loginFormBox" type="text" name="phone" placeholder="ENTER YOUR MOBILE NUMBER"><br>
OUTPUT;
if (isset($_SESSION['errors']['phone'])) {
    echo "<p class='checkoutError'>Please enter a valid mobile phone number.</p>";
}
echo <<<OUTPUT
      <h3>Email:</h3>
      <input class="loginFormBox" type="email" name="email" placeholder="ENTER YOUR EMAIL ADDRESS"><br>
OUTPUT;
if (isset($_SESSION['errors']['email'])) {
    echo "<p class='checkoutError'>Please enter a valid email address.</p>";
}
echo <<<OUTPUT
      <h3>Address:</h3>
      <textarea class="loginFormBox" rows="5" cols="30" type="text" name="address" placeholder="ENTER YOUR ADDRESS"></textarea><br>

OUTPUT;
if (isset($_SESSION['errors']['address'])) {
    echo "<p class='checkoutError'>Please enter a valid address.</p>";
}
echo <<<OUTPUT
      <!--<div>-->
      <h3 class="creditHeading">Credit Card:</h3>
      <!--<div class="visa">-->
         <!--<img class="visaImg" src="images/Visa.jpg">-->
      <!--</div>-->
      <!--</div> -->
      <div>     
      <input class="loginFormBox creditCard" type="text" name="creditCard" oninput ="checkVisa()" placeholder="ENTER YOUR CREDIT CARD NUMBER">
      <div class="visa">
         <img class="visaImg" src="images/Visa.jpg">
      </div>
      </div>
OUTPUT;
if (isset($_SESSION['errors']['creditCard'])) {
    echo "<p class='checkoutError'>Please enter a valid credit card number.</p>";
}
echo <<<OUTPUT
      <h3>Expiry Date:</h3>
      <input class="loginFormBox" type="date" name="expDate" placeholder="ENTER THE EXPIRY DATE MM/YYYY"><br>
      
OUTPUT;
if (isset($_SESSION['errors']['expDate'])) {
    echo "<p class='checkoutError'>Please enter a valid expiry date.</p>";
}
echo <<<OUTPUT
      <div>
        <input class="submitButton" name="submit" type="submit" value="SUBMIT">
      </div>
    </form>
OUTPUT;

end_module();
?>
