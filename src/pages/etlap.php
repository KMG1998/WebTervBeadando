<!DOCTYPE HTML>
<html lang="HU">
<head>
    <meta charset="UTF8">
    <meta description="Kipa étterem étlap">
    <link rel="stylesheet" type="text/css" href="../styles/etlap_style.css">
</head>
<body>
<nav><a href="">főoldal</a> <a href="">étlap</a> <a href="">kosár</a>  <a href="">profil</a> <a href="">kijelentkezés</a></nav>
<div id="mainDiv">
<div id="kedvencekDiv">
    <table id="kedvencekTable">
        <caption>kedvencek</caption>
        <thead>
            <th>név</th><th>ár</th><th>mennyiség</th><th></th>
        </thead>
        <tbody>
            <td name="foodName">humusz</td><td name="foodPrice">1000 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button></td><td><input type="button" class="hozzaAd" value="kosárba"></td>
        </tbody>
    </table>
</div>
<div id="etlapDiv">
    <table id="etlapTable">
        <caption>étlap<caption>
        <thead>
            <tr>
                <th>név</th><th colspan="2">jellemzés</th><th>ár</th><th>mennyiség</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td name="foodName">humusz</td> <td colspan="2" name="foodDesc">asd</td> <td name="foodPrice">1000 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button></td><td><input type="button" class="hozzaAd" value="kosárba"></td>
            </tr>
            <tr>
              <td name="foodName">sajtos pizza</td> <td colspan="2" name="foodDesc">dsa</td> <td name="foodPrice">1200 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button>  </td><td><input type="button" class="hozzaAd" value="kosárba"></td>
            </tr>
            <tr>
              <td name="foodName">falafel tál</td> <td colspan="2" name="foodDesc">placeholder</td name="foodPrice"> <td>800 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button> </td><td><input type="button" class="hozzaAd" value="kosárba"></td>
            </tr>
            <tr>
               <td name="foodName">steak</td> <td colspan="2" name="foodDesc">rand</td> <td name="foodPrice">1100 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button> </td><td><input type="button" class="hozzaAd" value="kosárba"></td>
            </tr>
            <tr>
               <td name="foodName">roston csirke</td> <td colspan="2" name="foodDesc">rand2</td name="foodPrice"> <td>900 Ft</td> <td name="foodCount"> <button>-</button> <label for foodCount>0</label> <button>+</button> </td><td><input type="button" class="hozzaAd" value="kosárba"></td>
            </tr>
        <tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
</div>
<script>
</script>
</body>
</html>