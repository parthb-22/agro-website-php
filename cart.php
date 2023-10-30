<?php
session_start();
include("connection/connect.php");
include_once 'product-action.php';

if (isset($_POST['product'])) {
    $product_id = $_POST['p_id'];
    $product_name = $_POST['title'];
    $product_price = $_POST['price'];
    $product_image = $_POST['img'];

    // Check if the cart exists in the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    $cart_item = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_image' => $product_image,
    );

    $_SESSION['cart'][] = $cart_item;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<tr>";
                echo "<td>" . $item['title'] . "</td>";
                echo "<td>$" . $item['price'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Your cart is empty.</td></tr>";
        }
        ?>
    </table>
    <a href="product.html">Continue Shopping</a>
</body>
</html>
