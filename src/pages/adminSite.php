<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin site</title>
    <link href="../styles/adminSite_style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="orderContainer">
    <form action="../script/php/finishOrder.php" id="activeOrdersForm" method="post">
        <!-- form belső tartalma amit az activeOrders tartalma alapján kell generálni -->
        <div class="orderDivs">
            <p>6418</p>
            <p>falafel 1, kebab 2, paprikás 4</p>
            <button type="submit" form="activeOrdersForm" formaction="adminSite.php" name="getSzamla" value="6418">számla</button>
            <button form="activeOrdersForm" name="submitBtn" type="submit" value="1234">kiad</button>
        </div>
    </form>
</div>
<script src="../script/JS/adminSite_JS.js"></script>
</body>
</html>
<?php
    //automatikus számla letöltés a számla gomb megnyomására
?>