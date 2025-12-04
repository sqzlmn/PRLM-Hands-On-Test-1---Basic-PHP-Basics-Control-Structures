<?php
# THIS IS CREATED BY ADRIANE LOUIS S. CADAWAN
$user = "ADRIANE";
$greet = "HELLO! ";

if (isset($user)) {
    $greet = "WELCOME BACK USER! ". $user;
}

$product = "KAPENG BARAKO";
$cost = 10;

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i;

    $discount = ($subtotal/100) * ($i * 4);

    $totals[$i] = $subtotal - $discount;
}

require "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ 1 DWEB PART 2</title>
</head>
<body>
    <h1><?=$greet?></h1>
    <h2>WE ARE SELLING: <?=$product?>!</h2>

    <table>
        <thead>
            <tr>
               <th>Quantiy</th>
               <th>Prices</th>
            </tr>
        </thead>
            <?php
            foreach ($totals as $quantity => $price) {
            ?>
            <tr>
                <td>
                    <?php echo $quantity;
                    $packs = ($quantity === 1) ? "pack" : "packs"
                    ?> 
                    <?= $packs?>
                </td>
                <td>PHP <?=$price?></td>
            </tr>
            <?php }?>
    </table>

    <?php require "includes/footer.php"?>
</body>
</html>