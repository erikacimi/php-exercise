<?php
function checkout() {
    if (empty($_SESSION['cart'])) {
        echo "Il carrello è vuoto. Impossibile procedere con il checkout.";
        return;
    }
    $total = 0;
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
       

function getProductById($product_id) {

    $products = getProductsFromAPI();
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            return $product;
        }
    }
    return null; 


        $total += $product['price'] * $quantity;
    }
    unset($_SESSION['cart']);
    
   
    echo "Grazie per il tuo acquisto! Il totale dell'ordine è di $" . number_format($total, 2) . ".";
}
}
?>
