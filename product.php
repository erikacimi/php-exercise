<?php
$products = getProductsFromAPI();

foreach ($products as $product) {
    echo '<div>';
    echo '<h2>' . $product['image'] . '<h2>';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>' . $product['description'] . '</p>';
    echo '<p>Price: $' . $product['price'] . '</p>';
    echo '<p>Quantity Available: ' . $product['quantity'] . '</p>';
  
    echo '<button onclick="addToCart(' . $product['id'] . ')">Add to Cart</button>';
    echo '</div>';
}
?>
