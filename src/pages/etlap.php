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
        <div><p class="foodName" onclick="showKosarhozAdModal('humusz',1000)">humusz</p><p class="foodPrice">1000</p></div>
    </aside>
    <div id="kosarhozAdModal">
        <form id="kosarhozAdForm" action="../script/php/kosarhozAdas.php" method="post">
            <label id="kosarhozAdNev" name="nev"></label>
            <label id="kosarhozAdAr"></label>
            <div><label for="kosarhozAdMennyiseg">mennyiség: </label>
                <select id="kosarhozAdMennyiseg" name="mennyiseg">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div>
                <input type="submit" value="kosárhoz ad">
                <input type="button" value="mégse" onclick="closeKosarhozAdModal()">
            </div>
        </form>
    </div>
    <div id="etlapContainer">
        <table id="etlapTable">
            <caption>étlap <br>
                <p>kosárhoz adáshoz kattintson az étel nevére</p></caption>
            <thead>
            <tr>
                <th>név</th>
                <th colspan="2">jellemzés</th>
                <th>ár</th>
            </tr>
            </thead>
            <tbody>
            <tr class="foodRow">
                <td class="foodName" onclick="showKosarhozAdModal('falafel',800)"><p>falafel</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('humusz',1000)">humusz</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">1000 Ft</td>
            </tr>
            <tr class="foodRowDiscount">
                <td class="foodName"><p onclick="showKosarhozAdModal('sajtos pizza',800)">sajtos pizza</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice"><p>800 Ft</p>
                    <p>600 Ft</p></td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('rakott krumpli zsidó módra',800)">rakott krumpli zsidó módra</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('csirke paprikás bulgurral',800)">csirke paprikás bulgurral</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('borjú kebab',800)">Borjú kebab</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">érmével jelölt ételeink kedvezményes árúak</td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
<script src="../script/JS/etlap_JS.js">
</script>
</div>
</body>
</html>