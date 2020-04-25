<?php
require "utils.php";
$fileHandler = new fileHandler();
$newFavourites=createNewFavouriteString();
$favouritesFile = $fileHandler->getFavouritesFile("w");
fwrite($favouritesFile,$newFavourites);
fclose($favouritesFile);
header("Location: http://localhost/EJ4V7E/pages/etlap.php");

function getCurrentFavourites(){
    global $fileHandler;
    $kedvencek = $fileHandler->getFavouritesFile("r");
    $line = null;
    do {
        $line = fgetcsv($kedvencek);
    } while ($line != false && $line[1] != $_SESSION['userId']);
    fclose($kedvencek);
    return $line[2];
}

function createNewFavouriteString(){
    global $fileHandler;
    $currentUserFavourites = getCurrentFavourites();
    $currentFavouritesString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/favourites.csv");
    $newUserFavourites="";

    $foodsFile = $fileHandler -> getFoodsFile("r");
    $foodsArray = null;

    while($line=fgetcsv($foodsFile)){
        $foodsArray[] = $line;
    }

    foreach ($_GET as $getParam){
        foreach ($foodsArray as $food){
            if($food[0] == $getParam){
                $newUserFavourites .= trim($food[0]).":".trim($food[1]).";";
            }
        }
    }

    fclose($foodsFile);
    return str_replace($currentUserFavourites,$newUserFavourites,$currentFavouritesString);
}