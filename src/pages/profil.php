<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="KiPa étterem étlap">
    <link rel="stylesheet" type="text/css" href="../styles/profil_style.css">
</head>
<body>
<div id="mainDiv">
    <div id="editKedvencekModal">
        <form method="post" action="../script/php/updateKedvencek.php">
            <div><input type="submit" value="kedvencek mentése"><input type="button" onclick="closeEditKedvencekModal()" value="mégse"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
            <div><label for="humusz">humusz</label><input type="checkbox"  id="humusz" name="humuszAddBox"></div>
        </form>
    </div>
    <nav>
        <ul>
            <li><a href="etlap.php">étlap</a></li>
            <li><a href="kosar.php">kosár</a></li>
            <li><a
                        href="profil.php">profil</a></li>
            <li><a href="../script/php/logout.php">kijelentkezés</a></li>
        </ul>
    </nav>
    <div id="content">
        <div id="sajatAdatokDiv">
            <form method="post" action="../script/php/updateUserData.php">
                <p>adatok szerkesztéséhez írja át <br>
                    a dobozokban levő értéket.</p>
                <label>kiszállítási cím: </label>
                <input type="text" name="cim" value="user_cim" required="required">
                <label>név: </label>
                <input type="text" name="nev" value="user_nev" required="required">
                <label>telefon: </label>
                <input type="tel" name="telefon" value="user_telefon" required="required">
                <input type="submit" value="adatok frissítése">
            </form>
        </div>
        <div id="kedvencek">
            <p>kedvencek</p>
            <ul>
                <li onclick="showEditKedvencekModal()">
                    kedvencek szerkesztése
                </li>
                <li>
                    falafel
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="../script/JS/profil_JS.js"></script>
</body>
</html>