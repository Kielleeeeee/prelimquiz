
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
    <title>Kalinderya</title>
</head>
<body>
    
<?php
$user = "Kielle Andrie G.";
$greet = "Hello";
if (!empty($user)) {
    $greet = "Hello, " . $user;
}
$products = [
    "Adobo",
];
$cost = 10;
$menu_discounts = [];
foreach ($products as $meal) { 
    $totals = [];


    for ($i = 1; $i <= 15; $i++) {
        $subtotal = $cost * $i;
        $discount = ($cost / 100) * ($i * 4);
        $totals[$i] = $subtotal - $discount;
    }
    $menu_discounts[$meal] = $totals;
}
?>
<?php require 'header.php'; ?>
<h1><?= $greet ?>! Welcome to Kalinderya</h1>
<p>Here are the discounted prices for our meals:</p>
<?php foreach ($menu_discounts as $meal => $data): ?>
    <h2><?= $meal ?></h2>
    <table>
        <tr>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr>
        <?php foreach ($data as $quantity => $price): ?>
            <tr>
                <td>
                    <?= $quantity ?> 
                    pack<?= ($quantity == 1 ? "" : "s") ?>
                </td>
                <td>₱<?= number_format($price, 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endforeach; ?>
<?php include 'footer.php'; ?>
</body>
</html>