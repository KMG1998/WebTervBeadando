<?php
require "utils.php";
$fileHandler = new fileHandler();

if($_POST["regiJelszo"] == "" || $_POST["ujJelszo"] == "" || $_POST["ujJelszoIsmet"] == ""){
die("kitöltetlen adatmezők.");
}

if($_SESSION['password'] != $_POST['regiJelszo']){
    die("Hibás régi jelszó!");
}

if($_POST['ujJelszo'] != $_POST['ujJelszoIsmet']){
    die("Nem egyeznek az új jelszavak!");
}
changePassword();
header("Location: http://localhost/EJ4V7E/pages/bejelentkezes.html");
session_destroy();

function changePassword(){
    global $fileHandler;
    $loginDataString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/usersLoginData.csv");
    $loginDataString = str_replace($_SESSION['userId'].",".$_SESSION['username'].",".$_SESSION['password'],
        $_SESSION['userId'].",".$_SESSION['username'].",".$_POST['ujJelszo'] ,$loginDataString);
    $loginDataFile = $fileHandler -> getUserLoginDataFile("w");
    fwrite($loginDataFile,$loginDataString);
    fclose($loginDataFile);
}