<?php
//function to style the current nav link
function styleCurrentNavLink($css){
    $here = $_SERVER['SCRIPT_NAME'];
    $bits = explode('/',$here);
    $filename = $bits[count($bits)-1];
    echo "<style>nav a[href$='$filename'] { $css } </style>";
}
function top_module($pageTitle, $pageID)
{
    $html = <<<"OUTPUT"
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>$pageTitle</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Nanum+Myeongjo:400,700|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>

<body id= $pageID>
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
    <li class="navItems home"><a href="index.php">HOME</a></li>
    <li class="navItems thisSeason"><a href="new_season.php">THIS SEASON</a></li>
    <li class="navItems heels"><a href="products.php">HEELS</a></li>
    <li class="navItems boots"><a href="boots.php">BOOTS</a></li>
    <li class="navItems flats"><a href="flats.php">FLATS</a></li>
    <li class="navItems contactUs"><a href="contact_us.php">CONTACT US</a></li>
  </ul>
  </ul>
</nav>
<main>
OUTPUT;
    echo $html;
    styleCurrentNavLink('color: #00A7B0;');
}
?>

<?php
function end_module()
{
    $html = <<<"OUTPUT"
</main>
<footer>
  <div>&copy;<script>
      document.write(new Date().getFullYear());
    </script>
    Jeanette Roga, S3699962
  </div>
  <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in
    Melbourne, Australia.
  </div>
  <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here.
    <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
  </div>
</footer>

</body>
</html>
OUTPUT;
    echo $html;
    // debug module that prints $_GET, $_POST and $_SESSION and prints code.
    preShow($_GET);
    preShow($_POST);
    preShow($_SESSION);
    printMyCode();
}

?>

<?php
// function for debugging, prints variables.
function preShow($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

// function to print all code on that page
function printMyCode(){
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class = 'mycode'>\n";
    foreach ($lines as $lineNo => $lineOfCode)
        printf("%3u: %1s\n",$lineNo, rtrim(htmlentities($lineOfCode)));
    echo "</pre>";
}

//function that reads the products list in product.txt and returns an array
function get_products()
{
    $products = null;
    $cells = null;
    $fp = fopen('products.txt', 'r');
    flock($fp, LOCK_SH);
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
        while ($cells = fgetcsv($fp, 0, "\t")) {
            for ($x = 2; $x < count($cells); $x++) {
                for ($y = 1; $y < count($cells); $y++) {
                    $products[$cells[0]][$cells[1]][$headings[$x]] = $cells[$x];
                }
            }
        }
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    return $products;
}
//function that returns an array of the product with matching id.
function get_product_with_id($products, $id)
{
    foreach ($products as $key => $productOptions) {
        if ($id == $key) {
            return array(
                "id" => $key,
                "options" => $productOptions
            );
        }

    }

    return null;
}

// function that returns the product details with matching oid
function get_product_options_from_product_with_id($product, $oid)
{
    foreach ($product['options'] as $oidKey => $value) {
        if ($oid == $oidKey) {
            return $value;
        }
    }

    return null;
}

// function to check whether a product id is valid
function valid_id ($id){
    $products = get_products();
    $value = get_product_with_id($products, $id);
    if ($value == null){
        return false;
    }
    return true;
}


?>


