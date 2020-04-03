<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="Kipa étterem kosár">
    <link rel="stylesheet" type="text/css" href="../styles/kosar_style.css">
</head>
<body>
<div id="mainDiv">
    <nav><a href="etlap.php">étlap</a> <a href="kosar.php">kosár</a> <a
                href="profil.php">profil</a>
        <a href="../script/php/logout.php">kijelentkezés</a>
    </nav>
    <form id="orderForm" action="../script/php/makeOrder.php" method="post">
        <div id="etelekDiv">
            <p>ételek</p>
            <div id="etelekKosarban">
                <p>bulgur</p><p>1000 Ft</p>
                <p>ez</p><p>1000 Ft</p>
                <p>az</p><p>1000 Ft</p>
            </div>
        </div>
        <div id="adatokDiv">
            <p>szállítási adatok</p>
            <div id="rendeloAdatai">
                <label>cím:</label><input type="text" name="cim" required="required">
                <label>telefon:</label><input type="tel" name="telefon" required="required">
                <label>név:</label><input type="text" name="nev" required="required">
                <label>megjegyzés:</label><textarea form="orderForm" name=""></textarea>
                <input type="submit" id="submitButton" value="megrendel">
            </div>
        </div>
    </form>
</div>