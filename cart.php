<?php
session_start();


function addToCart($product_id) {
    $_SESSION['cart'][$product_id]++;
}


function displayCart() {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $product = getProductById($product_id);
            echo '<div>';
            echo '<h2>' . $product['image'] . '<h2>';
            echo '<h2>' . $product['name'] . '</h2>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>Quantity: ' . $quantity . '</p>';
            echo '<p>Price: $' . $product['price'] * $quantity . '</p>';
            echo '<button onclick="removeFromCart(' . $product_id . ')">Remove</button>';
            echo '</div>';
        }
    } else {
        echo 'Il carrello è vuoto';
    }
}
?>
