<?php
# THIS IS CREATED BY ADRIANE LOUIS S. CADAWAN
$user = "Adriane";
$pagbati = "Hello!";
$offer = ["Kape", 10, 150, 100];

$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];

$saving = $reg_price - $offer_price;
require "includes/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ 1 DWEB PART 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="circle">
        <p>OMEGA SAVINGS! <?=$saving?> PHP</p>
    </div>
    <H1><?=$pagbati?> <?=$user?></H1>
    <p>ARE YOU INTERESTED IN <?=$offer[0]?>?</p>
    <p>IF YOU BUY  <?=$offer[1]?> YOU CAN GET IT AT A DISCOUNTED PRICE OF: PHP<?=$offer[3]?></p>
    <P>THE NORMAL PRICE IS: PHP<?=$offer[2]?></P>
    <?php require "includes/footer.php"?>
</body>
</html>