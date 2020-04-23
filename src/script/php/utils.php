<?php
function fillKedvencekOnEtlap($userId)
{
    $elementPrefix = "<p class=foodName onclick=showKosarhozAdModal(";
    $kedvencekFile = fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/favourites.csv", "r");
    $line = null;

    do {
        $line = fgetcsv($kedvencekFile);
    } while ($line['1'] != $userId);

    do {
        echo("$elementPrefix" . "'$line[2]'" . "," . "'$line[3]'" . ")>" . $line['2'] . "</p>");
        $line = fgetcsv($kedvencekFile);
    } while ($line['1'] == $userId);

    fclose($kedvencekFile);
}

function fillItemsToCart()
{
    if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $itemNum => $item){
                $osszeg = (int)$item['ar'] * (int)$item['mennyiseg'];
                echo "<div name=termek$itemNum>";
                echo " <input type='text' name='nev' value='$item[nev]' readonly = 'readonly'>";
                echo " <input type='text' name='mennyiseg' value='$item[mennyiseg]' readonly='readonly'>";
                echo " <input type='text' name='ar' value='$osszeg' readonly='readonly'>";
                echo " <button type='submit' form='orderForm' formaction='../script/php/handleCart.php' name='removeButton' value='$itemNum'>X</button>";
                echo "</div>";
            }
    } else {
        echo "<div>";
        echo "<p>" . "A kosár üres" . "</p>";
        echo "</div>";
    }
}

function checkLoggedInState()
{
    if (isset($_SESSION['userData']) == false) {
        header("Location: http://localhost/EJ4V7E/pages/bejelentkezes.html");
    }
}