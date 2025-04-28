<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Checkout</h1>

<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
  </tr>
  <?php
  $total = 0;
  if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
      echo "<tr><td>{$item['name']}</td><td>\${$item['price']}</td></tr>";
      $total += $item['price'];
    }
  }
  ?>
  <tr>
    <td><strong>Total</strong></td>
    <td><strong>$<?php echo $total; ?></strong></td>
  </tr>
</table>

<h2>Customer Information</h2>
<form method="post" action="php/order_process.php">
  <input type="text" name="name" placeholder="Your Name" required><br>
  <input type="text" name="address" placeholder="Delivery Address" required><br>
  <input type="text" name="phone" placeholder="Phone Number" required><br>
  <button type="submit" name="place_order">Place Order</button>
</form>

</body>
</html>
