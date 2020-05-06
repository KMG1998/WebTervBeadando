<?php
$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/EJ4V7E/pictures/userUploads/";
$file= $_FILES["picture"]["name"];
$imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$_FILES["picture"]["name"] = (uniqid().".".$imageFileType);
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;

if (isset($_POST["submit"])) {
    if ($_FILES["picture"]["size"] > 5242880) {
        echo "A kép mérete túl nagy.";
        $uploadOk = 0;
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Helytelen formátum, csak JPG, JPEG, PNG és GIF file-okat tölthet fel.";
        $uploadOk = 0;
    }
    if($uploadOk == 1) {
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
            echo "kép feltöltése sikeres.";
            unset($__FILES);
        } else {
            echo "Feltöltés sikertelen, próbálja meg újra.";
        }
    }
}

