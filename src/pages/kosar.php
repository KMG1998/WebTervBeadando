<?php
    require "../script/php/utils.php";
    checkLoggedInState();
?>
<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <title>kosár</title>
    <link rel="stylesheet" type="text/css" href="../styles/kosar_style.css">
    <link rel="stylesheet" type="text/css" href="../styles/menu_style.css">
</head>
<body>
<div id="mainDiv">
    <nav>
        <div id="menuContainer">
            <ul>
                <li>
                    <a href="etlap.php">étlap</a>
                </li>
                <li>
                    <a href="kosar.php">kosár</a>
                </li>
                <li>
                    <a href="profil.php">profil</a>
                </li>
                <li>
                    <a href="../script/php/logOut.php">kijelentkezés</a>
                </li>
            </ul>
        </div>
    </nav>
    <form id="orderForm" action="../script/php/processOrder.php" method="post">
        <div id="etelekDiv">
            <p>ételek</p>
            <div id="etelekKosarban">
                <?php
                fillItemsToCart();
                ?>
            </div>
        </div>
        <div id="adatokDiv">
            <p>szállítási adatok</p>
            <div id="fizetoEszkoz">
                <label for="keszpenz">készpénz</label><input type="radio" value="készpénz" name="fizeto" checked="checked">
                <label for="kartya">bankkártya</label><input type="radio" value="bankkártya" name="fizeto">
            </div>
            <div id="rendeloAdatai">
                <?php
                fillUserDataToCart();
                ?>
            </div>
        </div>
    </form>
</div>
<script src="../script/JS/kosar_JS.js"></script>
</body>
</html>