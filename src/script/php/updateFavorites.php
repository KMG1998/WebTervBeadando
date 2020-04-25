<?php
require "utils.php";
$fileHandler = new fileHandler();
$newFavourites=createNewFavouriteString();
//$favouritesFile = $fileHandler->getFavouritesFile("w");
print_r($_POST);


function getCurrentFavourites(){
    global $fileHandler;
    $kedvencek = $fileHandler->getFavouritesFile("r");
    $line = null;
    do {
        $line = fgetcsv($kedvencek);
    } while ($line != false && $line[1] != $_SESSION['userId']);
    return explode(";",$line[2]);
}

function createNewFavouriteString(){
    global $fileHandler;
    $currentFavourites = getCurrentFavourites();
    $currentFavouritesString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/favourites.csv");
    $foods = $fileHandler -> getFoodsFile();
    foreach ($currentFavourites as $fav){

    }
}