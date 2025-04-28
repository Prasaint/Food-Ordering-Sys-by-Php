<?php
session_start();
include 'db.php';

if (isset($_POST['place_order'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $items = json_encode($_SESSION['cart']);
    $total = 0;

    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, address, phone, items, total_price) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssd", $name, $address, $phone, $items, $total);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Clear cart
    unset($_SESSION['cart']);

    header("Location: ../thankyou.php");
}
?>
