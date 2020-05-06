<?php
require "utils.php";

$fileHandler = new fileHandler();
define('orderNumber', rand(1, 10000));
checkUserData();
checkCart();
createReciept();
addToActiveOrders();
unset($_SESSION['cart']);
echo "<p>Köszönjük rendelését.</p>";

function createReciept()
{
    $modifiedTop = createModifiedTop();
    $receipt = fopen($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/receipts/" .orderNumber. ".html", "w");
    fwrite($receipt, $modifiedTop);

    $totalPrice = 0;
    fputs($receipt, PHP_EOL);

    foreach ($_SESSION['cart'] as $item) {
        $egysegar = str_replace(" Ft", "", $item['ar']) / $item['mennyiseg'];
        $totalPrice += $egysegar * $item['mennyiseg'];
        fputs($receipt, "\t \t<tr>" . PHP_EOL);
        fputs($receipt, "\t \t \t<td>$item[nev]</td>" . PHP_EOL);
        fputs($receipt, "\t \t \t<td>$egysegar Ft</td>" . PHP_EOL);
        fputs($receipt, "\t \t \t<td>$item[mennyiseg]</td>" . PHP_EOL);
        fputs($receipt, "\t \t \t<td>$item[ar]"." Ft"."</td>" . PHP_EOL);
        fputs($receipt, "\t \t</tr>" . PHP_EOL);
    }
     $dateOfOrder =  date("Y-m-d, H:i:s");
    fputs($receipt, "\t \t</tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">összesen</td>
            <td>$totalPrice Ft</td>
        </tr>
        </tfoot>
    </table>
    <textarea>megjegyzés: $_POST[comment]</textarea>
    <p>Dátum: $dateOfOrder</p>
</div>
</body>
</html>");
}

function createModifiedTop(){
    $receiptFixTop = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/receiptFixTop.txt");
    $receiptFixTop = str_replace("User_Name", $_POST['userNev'], $receiptFixTop);
    $receiptFixTop = str_replace("User_Address", $_POST['cim'], $receiptFixTop);
    $receiptFixTop = str_replace("pay_Method", $_POST['fizeto'], $receiptFixTop);
    $receiptFixTop = str_replace("user_Tel", $_POST['telefon'], $receiptFixTop);
    return $receiptFixTop;
}

function checkUserData(){
    if($_POST['userNev'] == "" || $_POST['cim'] == "" || $_POST['telefon'] == ""){
        die("Kitöltetlen adatmező, kérjük töltse ki az összes szükséges adatot!");
    }
    if(is_numeric($_POST['telefon']) == false || $_POST['telefon'] < 36000000000 || $_POST['telefon'] > 36999999999 ){
        die("Hibás telefonszám formátum");
    }
}

function checkCart(){
    if(isset($_SESSION['cart']) == false){
        die("Üres a kosár, kérjük válasszon ételt!");
    }
}

function addToActiveOrders(){
    global $fileHandler;
    $ordersFile = $fileHandler->getActiveOrdersFile("a");
    $itemsString = "";
    foreach ($_SESSION['cart'] as $item){
        $itemsString .= $item['nev']." ".$item['mennyiseg'].":";
    }
    $orderData = array(orderNumber,$itemsString);
    fputcsv($ordersFile,$orderData);
}