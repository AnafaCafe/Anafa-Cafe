<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anafacafe.com</title>
    <link rel="icon" type="image/x-icon" href="gambar/favicon.png">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <div class="ContentWrapper">
        <?php
        include "navbar.php";
        ?>
        <h1 class="head">CART</h1>
        <div class="cart">
            <div class="container">
                <div class="conContent">
                    <!-- PHP code to display cart items -->
                    <?php include 'cart_items.php'; ?>
                </div>
                <div class="conTotal">
                    <div class="total">
                        <div class="t">
                            <div class="tot"><h3>Total Rp<?php include 'calculate_total.php'; ?></h3></div>
                        </div>
                        <div class="t">
                            <a class="check" href="checkout.php" ><p>Check Out</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</body>
</html>