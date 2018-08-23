<?php
// products.php is the heels tab on the website
session_start();
require_once('tools.php');
require_once('multiple_products.php');
require_once('product.php');

if (isset($_POST['cancel'])) {
    unset($_SESSION['cart']);
}

$products = get_products();

// check if the id is set and valid. if it is show a single product using the product_module or else show multiple products using the multi_product_module.
if (isset($_GET['id']) && valid_id($_GET['id'])) {
    $id = ($_GET['id']);
    $product = get_product_with_id($products, $id);
    product_module($product['id'], $product['options']);
} else {
    multi_product_module($products);
}


end_module();

?>
