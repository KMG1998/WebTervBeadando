<?php
require "utils.php";
$fileHandler = new fileHandler();

if(isset($_POST['adminSelect'])){
    loginProcess(true);
}
else{
    loginProcess(false);
}

function loginProcess($isAdmin)
{
    global $fileHandler;
    $userData = null;
    if($isAdmin === true) {
        $userData = $fileHandler->getAdminLoginDataFile("r");

    }
    else{
        $userData = $fileHandler->getUserLoginDataFile("r");;
    }

    $username = $_POST["userEmail"];
    $password = $_POST["password"];

    if($username == "" || $password ==""){
        die("Töltse ki a bejelentkezési adatokat");
    }

    while ($line = fgetcsv($userData)) {
        if ($line[1] == $username && $line[2] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['userId'] = $line[0];
            if($isAdmin == false) {
                header("Location: http://localhost/EJ4V7E/pages/etlap.php");
            }
            else{
                header("Location: http://localhost/EJ4V7E/pages/adminSite.php");
                $_SESSION['isAdmin'] = true;
            }
        }
    }
    die("Érvénytelen felhasználónév vagy jelszó");
    fclose($userdata);
}