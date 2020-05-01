<?php
require "utils.php";
$fileHandler = new fileHandler();

if(is_numeric($_POST['telefon']) == false || $_POST['telefon'] < 36000000000 || $_POST['telefon'] > 36999999999 ){
    die("Hibás telefonszám formátum");
}
replacePersonalData();
header("Location: http://localhost/EJ4V7E/pages/profil.php");

function replacePersonalData(){
    global $fileHandler;
    $personalDataOld = getUserPersonalData();
    $personalDataString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/usersPersonalData.csv");
    $personalDataString = str_replace($personalDataOld[0].",".$personalDataOld[1].",".$personalDataOld[2].",".$personalDataOld[3].",".$personalDataOld[4],
        $personalDataOld[0].",".$personalDataOld[1].",".$_POST['userNev'].",".$_POST['cim'].",".$_POST['telefon'] ,$personalDataString);

    $personalDataFile = $fileHandler -> getUserPersonalDataFile("w");
    fwrite($personalDataFile,$personalDataString);
    fclose($personalDataFile);
}