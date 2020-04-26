<!DOCTYPE html>
<?php
require ("../script/php/utils.php");
if(isset($_SESSION['username']) == false || isset($_SESSION['isAdmin']) == false){
    header("Location: http://localhost/EJ4V7E/pages/bejelentkezes.html");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin site</title>
    <link href="../styles/adminSite_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/menu_style.css">
</head>
<body>
<nav>
    <div id="menuContainer">
        <ul>
            <li>
                <a href="../script/php/logOut.php">kijelentkezés</a>
            </li>
        </ul>
    </div>
</nav>
<div id="orderContainer">
    <form action="../script/php/finishOrder.php" id="activeOrdersForm" method="post">
        <?php
            $fileHandler=new fileHandler();
            $ordersFile= $fileHandler->getActiveOrdersFile("r");
            while ($line = fgetcsv($ordersFile)){
                if($line[0] == null){

                }
                else {
                    echo "<div class=\"orderDivs\">";
                    echo "<p>$line[0]</p>";
                    echo "<p>" . str_replace(":", ",", $line[1]) . "</p>";
                    echo "<button type=\"submit\" form=\"activeOrdersForm\" formaction=\"../script/php/getSzamla.php\" name=\"getSzamla\" value='$line[0]'>számla</button>";
                    echo "<button form=\"activeOrdersForm\" name=\"submitBtn\" type=\"submit\" value='$line[0]'>kiad</button>";
                    echo "</div>";
                }
            }
        ?>
    </form>
</div>
<script src="../script/JS/adminSite_JS.js"></script>
</body>
</html>