<?php
// Initialize the cart as an empty array
$cart = [];

// Check if the cart cookie is set and decode it
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}

// Sample product data
$products = [
    ['id' => 1, 'name' => 'Product A', 'price' => 10.99],
    ['id' => 2, 'name' => 'Product B', 'price' => 14.99],
    ['id' => 3, 'name' => 'Product C', 'price' => 19.99]
];

function getProductById($products, $productId) {
    foreach ($products as $product) {
        if ($product['id'] == $productId) {
            return $product;
        }
    }
    return null;
}


if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];

    // Check if the product is already in the cart
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
    } else {
        // Add the product to the cart
        //$product = $products[$productId - 1];
        $product = getProductById($products, $productId);
        $cart[$productId] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }

    // Store the updated cart in a cookie
    setcookie('cart', json_encode($cart), time() + 3600 * 24 * 7); // Cookie expires in 1 week
}

if (isset($_POST['view_cart'])) {
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
<h1>Product List</h1>

<ul>
    <?php foreach ($products as $product) { ?>
        <li>
            <form method="post">
                <?php echo $product['name']; ?> - $<?php echo $product['price']; ?>
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <input type="submit" name="add_to_cart" value="Add to Cart">
            </form>
        </li>
    <?php } ?>
</ul>

<form method="post">
    <input type="submit" name="view_cart" value="View Cart">
</form>
</body>
</html>
