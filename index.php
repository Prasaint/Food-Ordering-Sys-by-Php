
<?php
// Start session to manage cart
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Food Order System</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Welcome to Our Food Menu</h1>

<div class="menu">
  <div class="item">
    <img src="images/burger.jpg" alt="Burger">
    <h2>Burger - $5</h2>
    <form method="post" action="cart.php">
      <input type="hidden" name="item_name" value="Burger">
      <input type="hidden" name="price" value="5">
      <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
  </div>

  <div class="item">
    <img src="images/pizza.jpg" alt="Pizza">
    <h2>Pizza - $8</h2>
    <form method="post" action="cart.php">
      <input type="hidden" name="item_name" value="Pizza">
      <input type="hidden" name="price" value="8">
      <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
  </div>
</div>

<a href="checkout.php">Go to Checkout</a>

</body>
</html>
