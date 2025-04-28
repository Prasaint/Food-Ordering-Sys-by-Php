<?php
session_start();

// Add item to cart
if (isset($_POST['add_to_cart'])) {
    $item = array(
        'name' => $_POST['item_name'],
        'price' => $_POST['price'],
        'quantity' => 1
    );
    $_SESSION['cart'][] = $item;
}

header("Location: index.php");
?>
