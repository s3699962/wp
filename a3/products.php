<?php
session_start();
require_once('tools.php');
require_once('multiple_products.php');
require_once('product.php');

if (isset($_POST['cancel'])) {
    unset($_SESSION['cart']);
}

$products = get_products();

if (isset($_GET['id']) && valid_id($_GET['id'])) {
    $id = ($_GET['id']);
    $product = get_product_with_id($products, $id);
    product_module($product['id'], $product['options']);
} else {
    multi_product_module($products);
}


end_module();

?>
