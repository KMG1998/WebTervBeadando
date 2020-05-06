<?php
require "utils.php";
if(count($_GET) == 0){
    die("Kérjük válasszon legalább egy kedvencet.");
}
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
    while ($line = fgetcsv($kedvencek)){
        if($line[1] == $_SESSION['userId']){
            break;
        }
    }
    fclose($kedvencek);
    return $line;
}

function createNewFavouriteString(){
    global $fileHandler;
    $currentUserFavourites = getCurrentFavourites();
    $currentFavouritesString = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/data/favourites.csv");
    $newUserFavourites=$currentUserFavourites[0].",".$currentUserFavourites[1].",";

    $foodsFile = $fileHandler -> getFoodsFile("r");
    $foodsArray = null;

    while($line=fgetcsv($foodsFile)){
        $foodsArray[] = $line;
    }
    fclose($foodsFile);

    foreach ($_GET as $getParam){
        foreach ($foodsArray as $food){
            if($food[0] == $getParam){
                $newUserFavourites .= trim($food[0]).":".trim($food[1]).";";
            }
        }
    }
    return str_replace($currentUserFavourites[0].",".$currentUserFavourites[1].",".$currentUserFavourites[2],$newUserFavourites,$currentFavouritesString);
}