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
    <?php
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../styles/menu_style.css\">";
    ?>
</head>
<body>
<div id="mainDiv">
    <nav>
        <div id="menuContainer">
            <ul>
                <?php
                    generateMenu(2);
                ?>
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