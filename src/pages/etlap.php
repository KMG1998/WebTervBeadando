<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="Kipa étterem étlap">
    <link rel="stylesheet" type="text/css" href="../styles/etlap_style.css">
</head>
<body>
<nav><a href="">főoldal</a> <a href="">étlap</a> <a href="">kosár</a> <a href="">profil</a> <a href="">kijelentkezés</a>
</nav>
<div id="mainDiv">
    <form action="../script/addToCart.php" method="post">
        <div id="kedvencekDiv">
            <table id="kedvencekTable">
                <caption>kedvencek</caption>
                <thead>
                <th>név</th>
                <th>ár</th>
                <th>mennyiség</th>
                <th></th>
                </thead>
                <tbody>
                <td name="foodName">humusz</td>
                <td name="foodPrice">1000 Ft</td>
                <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tbody>
            </table>
        </div>
        <div id="etlapDiv">
            <table id="etlapTable">
                <caption>étlap</caption>
                <thead>
                <tr>
                    <th>név,jellemzés</th>
                    <th>ár</th>
                    <th>mennyiség</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="foodRow">
                    <td class="foodNameDesc"><p class="FoodName">Falafel</p>
                        <p class="foodDesc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit</p></td>
                    <td class="foodPrice">800 Ft</td>
                    <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tr>
                <tr class="foodRow">
                    <td class="foodNameDesc"><p name="FoodName">Falafel</p>
                        <p name="foodDesc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit</p></td>
                    <td name="foodPrice">800 Ft</td>
                    <td class="foodCount">
                        <button>-</button>
                        <label for foodCount name="foodCount">0</label>
                        <button>+</button>
                    </td>
                    <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tr>
                <tr class="foodRow">
                    <td class="foodNameDesc"><p name="FoodName">Falafel</p>
                        <p name="foodDesc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit</p></td>
                    <td name="foodPrice">800 Ft</td>
                    <td class="foodCount">
                        <button>-</button>
                        <label for foodCount name="foodCount">0</label>
                        <button>+</button>
                    </td>
                    <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tr>
                <tr class="foodRow">
                    <td class="foodNameDesc"><p name="FoodName">Falafel</p>
                        <p name="foodDesc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit</p></td>
                    <td name="foodPrice">800 Ft</td>
                    <td class="foodCount">
                        <button>-</button>
                        <label for foodCount name="foodCount">0</label>
                        <button>+</button>
                    </td>
                    <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tr>
                <tr class="foodRow">
                    <td class="foodNameDesc"><p name="FoodName">Falafel</p>
                        <p name="foodDesc">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit</p></td>
                    <td name="foodPrice">800 Ft</td>
                    <td class="foodCount">
                        <button>-</button>
                        <label for foodCount name="foodCount">0</label>
                        <button>+</button>
                    </td>
                    <td><input type="button" class="hozzaAd" value="kosárba"></td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </form>
</div>
<script>
</script>
</body>
</html>