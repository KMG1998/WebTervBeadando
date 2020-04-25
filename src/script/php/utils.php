<?php
session_start();
$fileHandler = new fileHandler();
function fillKedvencekOnEtlap()
{
    global $fileHandler;
    $elementPrefix = "<p class=foodName onclick=showKosarhozAdModal(";
    $kedvencekFile = $fileHandler->getFavouritesFile("r");
    $line = null;
    do {
        $line = fgetcsv($kedvencekFile);
    } while ($line != false && $line[1] != $_SESSION['userId']);
    $favouriteArray=explode(";",$line[2]);
    $counter=0;

    do {
        $favouriteItem = explode(":",$favouriteArray[$counter]);
        echo("$elementPrefix" . "'$favouriteItem[0]'" . "," . "'$favouriteItem[1]'" . ")>" . $favouriteItem[0] . "</p>");
        $counter++;
        $line = fgetcsv($kedvencekFile);
    } while ($line != false && $line[1] == $_SESSION['userId']);

    fclose($kedvencekFile);
}

function fillItemsToCart()
{
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $itemNum => $item) {
            echo "<div name=termek$itemNum>";
            echo " <input type='text' name='nev' value='$item[nev]' readonly = 'readonly'>";
            echo " <input type='text' name='mennyiseg' value='$item[mennyiseg]' readonly='readonly'>";
            echo " <input type='text' name='ar' value='$item[ar] Ft' readonly='readonly'>";
            echo " <button type='submit' form='orderForm' formaction='../script/php/handleCart.php' name='removeButton' value='$itemNum'>X</button>";
            echo "</div>";
        }
    } else {
        echo "<div>";
        echo "<p>" . "A kosár üres" . "</p>";
        echo "</div>";
    }
}

function fillUserDataToCart()
{
    printPersonalData();
    echo "<label>megjegyzés:</label>";
    echo "<textarea form=\"orderForm\" name=\"comment\"></textarea>";
    echo "<input type=\"submit\" id=\"submitButton\" value=\"megrendel\">";
}

function fillUserDataToProfile()
{
    printPersonalData();
    echo "<div>";
    echo "<input type=\"submit\" value=\"adatok frissítése\" name='submitButton'>";
    echo "<input type=\"button\" onclick=\"closeEditModal()\" value=\"mégse\">";
    echo "</div>";
}

function printPersonalData()
{
    $userPersonalData = getUserPersonalData();
    echo "<label>cím:</label>";
    echo "<input type=\"text\" name=\"cim\" value='$userPersonalData[3]'>";
    echo "<label>telefon:</label>";
    echo "<input type=\"tel\" name=\"telefon\" value='$userPersonalData[4]'>";
    echo "<label>név:</label>";
    echo "<input type=\"text\" name=\"userNev\" value='$userPersonalData[2]'>";
}

function getUserPersonalData()
{
    global $fileHandler;
    $personalDataFile = $fileHandler->getUserPersonalDataFile("r");

    while ($line = fgetcsv($personalDataFile)) {
        if ($line[1] == $_SESSION['userId']) {
            return $line;
        }
    }
    fclose($personalDataFile);
}

function checkLoggedInState()
{
    if (isset($_SESSION['username']) == false) {
        header("Location: http://localhost/EJ4V7E/pages/bejelentkezes.html");
    }
}

class fileHandler
{
    public function getUserLoginDataFile($mode)
    {
        return fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/usersLoginData.csv", $mode);
    }

    public function getUserPersonalDataFile($mode)
    {
        return fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/usersPersonalData.csv", $mode);
    }

    public function getActiveOrdersFile($mode)
    {
        return fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/activeOrders.csv", $mode);
    }

    public function getFavouritesFile($mode)
    {
        return fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/favourites.csv", $mode);
    }

    public function getFoodsFile($mode){
        return fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/foodsWithPrices.csv", $mode);
    }
}