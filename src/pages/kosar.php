<?php
    session_start();
    require "../script/php/utils.php";
?>
<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <title>kosár</title>
    <meta description="Kipa étterem kosár">
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
                    <a href="profil.html">profil</a>
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
                <label for="keszpenz">készpénz</label><input type="radio" id="keszpenz" name="fizeto" checked="checked">
                <label for="kartya">bankkártya</label><input type="radio" id="kartya" name="fizeto">
            </div>
            <div id="rendeloAdatai">
                <label>cím:</label><input type="text" name="cim" required="required" value="user_cim">
                <label>telefon:</label><input type="tel" name="telefon" required="required" value="user_tel">
                <label>név:</label><input type="text" name="nev" required="required" value="user_nev">
                <label>megjegyzés:</label><textarea form="orderForm" name=""></textarea>
                <input type="submit" id="submitButton" value="megrendel">
            </div>
        </div>
    </form>
</div>
<script src="../script/JS/kosar_JS.js"></script>
</body>
</html>