<?php
session_start();
require '../script/php/utils.php';
$_SESSION['userId'] = 1;
?>
<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="KiPa étterem étlap">
    <title>étlap</title>
    <link rel="stylesheet" type="text/css" href="../styles/etlap_style.css">
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
    <div id="kosarhozAdModal">
        <form id="kosarhozAdForm" action="../script/php/handleCart.php" method="post">
            <input type="text" id="kosarhozAdNev" name="nev" readonly>
            <input type="text" id="kosarhozAdAr" name="ar" readonly>
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
                <input type="submit" value="kosárhoz ad" name="addToCart">
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
                <td class="foodName"><p onclick="showKosarhozAdModal('sajtos pizza',600)">sajtos pizza</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice"><p>800 Ft</p>
                    <p>600 Ft</p></td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('Kube-leves',800)">Kube-leves</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('csirke paprikás bulgurral',900)">csirke paprikás
                        bulgurral</p></td>
                <td class="foodDesc" colspan="2">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,
                    consectetur,
                    adipisci velit
                </td>
                <td class="foodPrice">800 Ft</td>
            </tr>
            <tr class="foodRow">
                <td class="foodName"><p onclick="showKosarhozAdModal('Saksuka',1200)">Saksuka</p></td>
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
    <aside id="kedvencek">
        <div>
            <p>kedvencek</p>
            <?php
            fillKedvencekOnEtlap($_SESSION['userId']);
            ?>
        </div>
    </aside>
</div>
<script src="../script/JS/etlap_JS.js">
</script>
</div>
</body>
</html>