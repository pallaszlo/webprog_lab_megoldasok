<?php
// Initialize the cart as an empty array
$cart = [];

// Check if the cart cookie is set and decode it
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}

if (isset($_POST['remove_from_cart'])) {
    $productId = $_POST['product_id'];

    // Check if the product is in the cart and its quantity is greater than 1
    if (isset($cart[$productId]) && $cart[$productId]['quantity'] > 1) {
        $cart[$productId]['quantity']--;
    } else {
        // Remove the product from the cart
        unset($cart[$productId]);
    }

    // Store the updated cart in a cookie
    setcookie('cart', json_encode($cart), time() + 3600 * 24 * 7); // Cookie expires in 1 week
}

// Calculate the total price of the cart
$totalPrice = 0;
foreach ($cart as $productId => $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>
<h1>Shopping Cart</h1>

<ul>
    <?php foreach ($cart as $productId => $item) { ?>
        <li>
            <form method="post">
                <?php echo $item['name']; ?> - $<?php echo $item['price']; ?>
                (Quantity: <?php echo $item['quantity']; ?>)
                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                <input type="submit" name="remove_from_cart" value="Remove from Cart">
            </form>
        </li>
    <?php } ?>
</ul>

<p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>

</body>
</html>
