<?php
require "utils.php";
$fileHandler = new fileHandler();
deleteFromActiveOrders();
/*deleteBlankLines();*/
deleteReceipt();

header("Location: http://localhost/EJ4V7E/pages/adminSite.php");

function deleteReceipt()
{
    unlink($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/receipts/" . $_POST["submitBtn"] . ".html");
}

function deleteFromActiveOrders()
{
    global $fileHandler;
    $currentOrdersString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/activeOrders.csv");
    $ordersFile = $fileHandler->getActiveOrdersFile("r");
    $line = null;
    while ($line = fgetcsv($ordersFile)) {
        if ($line[0] == $_POST['submitBtn']) {
            break;
        }
    }
    fclose($ordersFile);
    $ordersFile = $fileHandler->getActiveOrdersFile("w");
    $orderToReplace = $line[0] .","."\"".$line[1]."\"";
    $newOrdersString = str_replace($orderToReplace, '', $currentOrdersString);
    fwrite($ordersFile, $newOrdersString);
    fclose($ordersFile);
}