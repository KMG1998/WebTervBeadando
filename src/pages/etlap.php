<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="KiPa étterem étlap">
    <link rel="stylesheet" type="text/css" href="../styles/etlap_style.css">
</head>
<body>
<div id="mainDiv">
    <nav><a href="etlap.php">étlap</a> <a href="kosar.php">kosár</a> <a
                href="profil.php">profil</a>
        <a href="../script/php/logout.php">kijelentkezés</a>
    </nav>
<aside id="kedvencek">
    <p style="font-size: 18px;font-weight: bold">kedvencek</p>
    <p class="foodName">humusz</p>
</aside>
<div id="kosarhozAdDiv">
    <form id="kosarhozAdForm" action="../script/php/addToCart.php" method="post">

    </form>
</div>
    <table id="etlapTable">
        <caption>étlap</caption>
        <thead>
        <tr>
            <th>név</th>
            <th colspan="2">jellemzés</th>
            <th>ár</th>
        </tr>
        </thead>
        <tbody>
        <tr class="foodRow" id="falafel">
            <td class="foodName"><p>falafel</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">800 Ft</td>
        </tr>
        <tr class="foodRow" id="humusz">
            <td class="foodName"><p>humusz</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">1000 Ft</td>
        </tr>
        <tr class="foodRow" id="sajtos_pizza">
            <td class="foodName"><p>sajtos pizza</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">800 Ft</td>
        </tr>
        <tr class="foodRow" id="rakott_krumpli">
            <td class="foodName"><p>rakott krumpli zsidó módra</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">800 Ft</td>
        </tr>
        <tr class="foodRow">
            <td class="foodName"><p>csirke paprikás bulgurral</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">800 Ft</td>
        </tr>
        <tr class="foodRow">
            <td class="foodName"><p>Borjú kebab</p></td>
            <td class="foodDesc" colspan="2"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit</p></td>
            <td class="foodPrice">800 Ft</td>
        </tr>
        </tbody>
       <tfoot>
        <tr>
            <td colspan="4">Kosárhoz adáshoz kattintson a kívánt ételre</td>
        </tr>
        </tfoot>
    </table>
</div>
<script src="../script/JS/etlap_JS.js">
</script>
</div>
</body>
</html>