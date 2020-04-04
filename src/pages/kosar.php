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
    <form id="orderForm" action="../script/php/rendelesLead.php" method="post">
        <div id="etelekDiv">
            <p>ételek</p>
            <div id="etelekKosarban">
                <div name="termek1">
                    <p>bulgur</p>
                    <p>1</p>
                    <p>800 Ft</p>
                    <p onclick="removeTermekFromKosar('termek1')">X</p>
                </div>
                <div name="termek2">
                    <p>csirke paprikás bulgurral</p>
                    <p>2</p>
                    <p>2000 Ft</p>
                    <p onclick="removeTermekFromKosar('termek2')">X</p>
                </div>
                <div name=termek3>
                    <p>kebab</p>
                    <p>1</p>
                    <p>1000 Ft</p>
                    <p onclick="removeTermekFromKosar('termek3')">X</p>
                </div>
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