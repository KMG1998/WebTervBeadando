<?php
require "utils.php";
session_start();

$userData = $fileHandler->getUserLoginDataFile("r");;
$username = $_POST["userEmail"];
$password = $_POST["password"];
$id = 0;

while($line = fgetcsv($userData)){
   if($line[1] == $username && $line[2] == $password){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['userId'] = $line[0];
       header("Location: http://localhost/EJ4V7E/pages/etlap.php");
   }
}
die("Érvénytelen felhasználónév vagy jelszó");
fclose($userdata);