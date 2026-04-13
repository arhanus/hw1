<?php
function bb_h($s) {
  return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$entree = $_POST['entree'] ?? '';
$beverage = $_POST['beverage'] ?? '';
$dessert = $_POST['dessert'] ?? '';
$dining = $_POST['dining-method'] ?? '';
$time = $_POST['time'] ?? '';
$instructions = $_POST['instructions'] ?? '';
$addonsRaw = $_POST['addons'] ?? [];
$addons = is_array($addonsRaw) ? $addonsRaw : [];
$addonsText = count($addons) ? implode(', ', array_map('bb_h', $addons)) : 'None';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation - El Turco</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="receipt-page">

<header>
  <h1>El Turco</h1>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="menu.html">Menu</a></li>
      <li><a href="order.html">Order</a></li>
      <li><a href="reviews.html">Reviews</a></li>
    </ul>
  </nav>
</header>
<hr>

<main>
  <h2>Thank you for your order!</h2>
  <div class="receipt-block">
    <p><strong>Name:</strong> <?php echo bb_h($name); ?></p>
    <p><strong>Phone:</strong> <?php echo bb_h($phone); ?></p>
    <p><strong>Entrée:</strong> <?php echo bb_h($entree); ?></p>
    <p><strong>Beverage:</strong> <?php echo bb_h($beverage); ?></p>
    <p><strong>Dessert:</strong> <?php echo bb_h($dessert); ?></p>
    <p><strong>Add-ons:</strong> <?php echo $addonsText; ?></p>
    <p><strong>Pickup or delivery:</strong> <?php echo bb_h($dining); ?></p>
    <p><strong>Time:</strong> <?php echo bb_h($time); ?></p>
    <p><strong>Special instructions:</strong> <?php echo bb_h($instructions); ?></p>
  </div>
</main>
<hr>

<footer>
  <p>Created by Arhan Us | info@elturco.com | 541-740-2126</p>
  <p>© 2026 El Turco. All rights reserved.</p>
</footer>

</body>
</html>
