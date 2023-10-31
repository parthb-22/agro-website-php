<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Include Bootstrap and other stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Include any other CSS files you need -->

    <style>
        /* Add custom styles here */
        .order-summary {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        body {
            background-image: url("./img/bg.png");
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <br><br>
        <h2 class="mb-4"><i class="fas fa-shopping-cart"></i> Checkout</h2>

        <!-- Shipping Information Form -->
        <form method="post" action="place_order.php">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Shipping Address</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="mb-3">
                <label for "phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
        <br>
        <!-- Order Summary -->
        <div class="order-summary">
            <h3>Order Summary</h3>
            <?php
            // Start the session to access the cart data
            session_start();

            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                // Calculate the total price of the items in the cart
                $totalPrice = 0;
                foreach ($_SESSION['cart'] as $product) {
                    $totalPrice += $product['product_price'] * $product['quantity'];
                }

                echo '<p>Total Price: Rs.' . $totalPrice . '</p>';
            } else {
                echo '<p>Your cart is empty.</p>';
            }
            ?>
        </div>
        <a href="cart.php" class="btn btn-primary">View Cart</a>

    </div>

    <!-- Include Bootstrap and other scripts -->
    <script src="https://ajax.googleapis.com/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include any other JavaScript files you need -->
</body>

</html>