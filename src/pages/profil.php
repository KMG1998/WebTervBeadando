<?php
require "../script/php/utils.php";
checkLoggedInState();
?>
<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <title>profil</title>
    <link rel="stylesheet" type="text/css" href="../styles/profil_style.css">
    <?php
     echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../styles/menu_style.css\">";
    ?>
</head>
<body>
<nav>
    <div id="menuContainer">
        <ul>
            <?php
            generateMenu(3);
            ?>
        </ul>
    </div>
</nav>
<div id="content">
    <div id="szerkesztesValaszto">
        <input type="button" onclick="showEditAdatokModal()" value="Adatok szerkesztése">
        <input type="button" onclick="showEditKedvencekModal()" value="kedvencek szerkesztése">
        <input type="button" onclick="showJelszoCsereModal()" value="Jelszóváltás">
        <input type="button" onclick="showUploadModal()" value="Kép feltöltése">
    </div>
</div>
<div id="editModal">
    <form method="get" id="editKedvencekForm" action="../script/php/updateFavorites.php">
        <div>
            <input type="submit" value="kedvencek mentése">
            <input type="button" onclick="closeEditModal()" value="mégse">
            <p>csak a kipipált értékek lesznek kedvencek!</p>
        </div>
        <div><label for="humusz">humusz</label><input type="checkbox" id="humusz" name="humuszAdd" value="humusz"></div>
        <div><label for="falafel">falafel</label><input type="checkbox" id="falafel" name="falafelAdd" value="falafel"></div>
        <div><label for="sajtosPizza">sajtos pizza</label><input type="checkbox" id="sajtosPizza" name="sajtosPizzaAdd" value="sajtos pizza"></div>
        <div><label for="kube-leves">Kube-leves</label><input type="checkbox" id="kube-leves" name="kubeAdd" value="Kube-leves"></div>
        <div><label for="csirke-paprikás">csirke paprikás</label><input type="checkbox" id="csirke-paprikás" name="csirkePaprikásAdd" value="csirke paprikás"></div>
        <div><label for="Saksuka">Saksuka</label><input type="checkbox" id="Saksuka" name="SaksukaAdd" value="Saksuka"></div>
        <div><label for="Sabich">Sabich</label><input type="checkbox" id="Sabich" name="SabichAdd" value="Sabich"></div>
    </form>
    <form method="post" id="editAdatokForm" action="../script/php/updateUserData.php" method="post">
        <?php
        fillUserDataToProfile();
        ?>
    </form>
    <form method="post" id="jelszoCsereForm" action="../script/php/changeUserPassword.php" method="post">
        <label>régi jelszó</label>
        <input type="password" name="regiJelszo" >
        <label>új jelszó</label>
        <input type="password" name="ujJelszo" >
        <label>új jelszó ismét</label>
        <input type="password" name="ujJelszoIsmet" >
        <div>
            <input type="submit" value="jelszó mentése">
            <input type="button" onclick="closeEditModal()" value="mégse">
        </div>
    </form>
    <form method="post" id="kepFeltoltForm" action="../script/php/uploadPic.php" enctype="multipart/form-data">
        <label>Tölts fel egy képet kedvenc ételeddel, mi pedig hetente post-oljuk a legjobbakat.</label>
        <input type="file" name="picture">
        <div>
        <input type="submit" value="Kép feltöltése" name="submit">
        <input type="button" onclick="closeEditModal()" value="mégse">
        </div>
    </form>
</div>
<script src="../script/JS/profil_JS.js"></script>
</body>
</html>