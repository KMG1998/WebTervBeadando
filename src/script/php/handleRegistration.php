<?php
require "utils.php";
session_start();

$fileHandler = new fileHandler();
$userData = $fileHandler->getUserLoginDataFile("r");;
$username = $_POST["userEmail"];
$password = $_POST["password"];
$password2 = $_POST["passwordRepeat"];
$userId = 0;
$favId = 0;
$personalId = 0;

if ($password !== $password2){
    die("Nem egyezik a két megadott jelszó!");
}
while($line = fgetcsv($userData)){
    if($line[1] == $username) {
    die("foglalt felhasználónév");
    } else {
    $userId++;
    }
}
fclose($userData);

$array = array($userId, $username, $password);
$userData = $fileHandler->getUserLoginDataFile("a");;
fputcsv($userData, $array, ",", '"');


$userData2 = $fileHandler->getFavouritesFile("r");
while($line = fgetcsv($userData2)){
    if($line[0] !== $id) {
        $favId++;
    }
}
fclose(userData2);
$userData2 = $fileHandler->getFavouritesFile("a");;
$userArray = array($favId, $userId,"","");
fputcsv($userData2, $userArray, ",", '"');
fclose($userData2);


$userData3 = $fileHandler->getUserPersonalDataFile("r");;
while($line = fgetcsv($userData3)){
    if($line[0] !== $id) {
        $personalId++;
    }
}
fclose(userData2);
$userData2 = $fileHandler->getUserPersonalDataFile("a");;
$userArray = array($personalId, $userId,"","","");
fputcsv($userData2, $userArray, ",", '"');
fclose($userData2);

header("Location: http://localhost/EJ4V7E/pages/bejelentkezes.html");