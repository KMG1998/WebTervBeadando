<?php
session_start();
if (isset($_POST['addToCart'])) {
    $containsItem = false;
    for ($i=0; $i < count($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i]['nev'] == $_POST['nev']) {
            $_SESSION['cart'][$i]['mennyiseg'] += $_POST['mennyiseg'];
            $containsItem = true;
        }
    }
    if ($containsItem == false) {
        $_SESSION['cart'][] = $_POST;
    }
    header("Location: http://localhost/EJ4V7E/pages/etlap.php");

}
else {
    echo $_POST['removeButton'];
    array_splice($_SESSION['cart'], $_POST['removeButton'], 1);
    if (isset($_SESSION['cart'][0]) == false) {
        unset($_SESSION['cart']);
    }
    header("Location: http://localhost/EJ4V7E/pages/kosar.php");
}