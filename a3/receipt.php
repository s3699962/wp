<?php
session_start();
require_once('tools.php');

if (isset ($_SESSION['errors'])) {
    unset ($_SESSION['errors']);
}

$error = false;
if (isset($_POST['fName'], $_POST['lName'], $_POST['phone'], $_POST['email'], $_POST['creditCard'], $_POST['expDate'], $_POST['address'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $creditCard = $_POST['creditCard'];
    $expDate = $_POST['expDate'];
    $address = $_POST['address'];

    if (!preg_match("/[A-Za-z .,'-]$/", $fName)) {
        $error = true;
        $_SESSION['errors']['firstName'] = $fName;
    }

    if (!preg_match("/[A-Za-z \-.,']$/", $lName)) {
        $error = true;
        $_SESSION['errors']['lastName'] = $lName;
    }

    if (!preg_match("/^((\+614)|(04)|(\(04\)))(\s{0,1}\d){8}$/", $phone)) {
        $error = true;
        $_SESSION['errors']['phone'] = $phone;
    }

    if (!preg_match("/^(\s{0,1}\d){12,19}$/", $creditCard)) {
        $error = true;
        $_SESSION['errors']['creditCard'] = $creditCard;
    }

    if (preg_match("/^(\d{4}\-\d{2}\-\d{2})$/", $expDate)) {
        $month = explode("-", $expDate)[1];
        $year = explode("-", $expDate)[0];
        $date = date_create("01-$month-$year");
        $now = date("01-m-Y");
        $currentDate = date_create("$now");
        $difference = date_diff($currentDate, $date);
        $monthDifference = $difference->format('%m');
        $invert = $difference->invert;
        if ($invert == 1) {
            $error = true;
            $_SESSION['errors']['expDate'] = $expDate;
        } else if ($monthDifference < 2) {
            $error = true;
            $_SESSION['errors']['expDate'] = $expDate;
        }
    } else {
        $error = true;
        $_SESSION['errors']['expDate'] = $expDate;
    }
    if (!preg_match("/[0-9A-Za-z \-.,'\/\n]$/", $address)) {
        $error = true;
        $_SESSION['errors']['address'] = $address;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $_SESSION['errors']['email'] = $email;
    }
}
if ($error == true) {
    header("Location: checkout.php");
}

echo <<<OUTPUT
<link id='stylecss' rel="stylesheet" href="css/receipt_page.css">
<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

<div class="receiptPage">
  <div class="logo">
    <img src="images/logo_and_Name.png" class="logoImage">
  </div>
  <div class="thanks">
    <h3>THANKS FOR SHOPPING WITH US</h3>
  </div>
  <div class="hello">
    <p>Hi $fName,</p>
    <p>Your order is currently being processed. We'll send you an email when your order is on its way. </p>
  </div>
  <div class="itemList">
    <h4>ITEMS YOU ORDERED</h4>
  </div>
OUTPUT;
$products = get_products();
$cartTotal = 0;
//if (isset ($_POST['id'], $_POST['qty'], $_POST['oid'])) {

foreach ($_SESSION['cart'] as $key => $cartOptions) {
    foreach ($cartOptions as $size => $quantity) {
        $options = get_product_with_id($products, $key);
        $cartProduct = get_product_options_from_product_with_id($options, $size);

        $image = "$cartProduct[Image]";
        $price = "$cartProduct[Price]";
        $productTotal = number_format((float)($price * $quantity), 2, '.', '');
        $title = "$cartProduct[Title]";

        $cartTotal = ($cartTotal + $productTotal);
        $orderTotal = number_format((float)$cartTotal, 2, '.', '');
//    echo "$_SESSION[cart][$key]";
        echo <<<"OUTPUT"
  <div class="productList">
  <div class ="descSection">
    <h3 class="title">DESCRIPTION</h3>
    <h4 class="prodTitle"content>$title</h4>
    <p class="content">PRODUCT ID: $key</p>
    <p class="content">QTY: $quantity</p>
    <p class="content">SIZE: $size</p>
  </div>
  <div class="priceSection">
    <h3 class="title">ITEM PRICE</h3>
    <h4 class="prodTitle">$$price</h4>
  </div> 
  <div class="totalSection">
    <h3 class="title">SUBTOTAL</h3>
    <h4 class="prodTitle">$$productTotal</h4>
  </div>
  </div>

OUTPUT;
    }
}
$today = date("d/m/Y");

echo <<<"OUTPUT"
  <div class="orderTotal">
      <h3>ORDER TOTAL: $$orderTotal</h3>
  </div>
  <div class="custDetails">
    <div class="custSection">
      <div class="custTitle">
        <h4>Order Date:</h4>
      </div>
      <div class="custValue">
        <h4>$today</h4>
      </div>
    </div>
    <div class="custSection">
      <div class="custTitle">
        <h4>Name:</h4>
      </div>
      <div class="custValue">
        <h4>$fName $lName</h4>
      </div>
    </div>
    <div class="custSection">
      <div class="custTitle">
        <h4>Billing Address:</h4>
      </div>
      <div class="custValue">
        <h4>$address</h4>
      </div>
    </div>
    <div class="custSection">
       <div class="custTitle">
          <h4>Email:</h4>
       </div>
       <div class="custValue">
          <h4>$email</h4>
       </div>
    </div>
    <div class="lastCustSection">
      <div class="custTitle">
        <h4>Phone:</h4>
      </div>
      <div class="custValue">
         <h4>$phone</h4>
       </div>
    </div>
  </div>
  <div class="custService">
  <h3>Customer Service:</h3>
    <div class="custTitle">
       <h5>Phone:</h5>
    </div>
    <div class="custValue">
       <h5>1300 123 456</h5>
    </div>
    <div class="custTitle">
       <h5>Email:</h5>
    </div>
    <div class="custValue">
       <h5>hello@shoestack.com.au</h5>
    </div>
  </div>
</div>
OUTPUT;
echo "</div>";



end_module();

