<?php
session_start();
if (isset($_POST['addToCart'])) {
    $_POST['ar'] = str_replace(" Ft", "", $_POST['ar']);
    if (isset($_SESSION['cart'])) {
        $containsItem = false;
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['nev'] == $_POST['nev']) {
                $_SESSION['cart'][$i]['mennyiseg'] += $_POST['mennyiseg'];
                $_SESSION['cart'][$i]['ar'] += $_POST['ar'] * $_POST['mennyiseg'];
                $containsItem = true;
                break;
            }
        }
        if ($containsItem == false) {
            addNewItemNotContained();
        }
    } else {
        addNewItemNotContained();
    }
    header("Location: http://localhost/EJ4V7E/pages/etlap.php");
} else {
    array_splice($_SESSION['cart'], $_POST['removeButton'], 1);
    if (isset($_SESSION['cart'][0]) == false) {
        unset($_SESSION['cart']);
    }
    header("Location: http://localhost/EJ4V7E/pages/kosar.php");
}

function addNewItemNotContained()
{
    $_SESSION['cart'][] = $_POST;
    $lastIndex = array_key_last($_SESSION['cart']);
    $lastItem = $_SESSION['cart'][$lastIndex];
    $lastItem['ar'] = $lastItem['mennyiseg'] * $lastItem['ar'];
    $_SESSION['cart'][$lastIndex] = $lastItem;
}