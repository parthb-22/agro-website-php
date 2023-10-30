<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Check if the cart exists in the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    $cart_item = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
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
                echo "<td>" . $item['product_name'] . "</td>";
                echo "<td>$" . $item['product_price'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Your cart is empty.</td></tr>";
        }
        ?>
    </table>
    <a href="productss.php">Continue Shopping</a>
</body>
</html>
