<?php

include "UploadPicture.php";

//save just image without any other parameters
//this usage will save file in current directory at given size and without compression
$upload = new UploadPicture();
try {
    $upload->savePicture($_FILES['file']);
} catch (\Exception $exc) {
    //do what you want in case of error
}

//save file in desired directory (for example in a directory "pictures" on a superior level
$upload1 = new UploadPicture();
$upload1->setSavePath(rtrim(__DIR__, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'pictures' . DIRECTORY_SEPARATOR);
try {
    $upload1->savePicture($_FILES['file']);
} catch (\Exception $exc) {
    //do what you want in case of error
}

//save file at desired size
$upload2 = new UploadPicture();
$upload2->setDesiredSize(300, 300);
try {
    $upload2->savePicture($_FILES['file'], null, true);
} catch (\Exception $exc) {
    //do what you want in case of error
}

//save file with desired name, with desired size and at compression of 90
//compression of file offer a good usage of disk
$upload3 = new UploadPicture();
$upload3->setDesiredSize(500, 300);
try {
    $upload3->savePicture($_FILES['file'], 'MyPicture.jpg', true, 90);
} catch (\Exception $exc) {
    echo $exc->getMessage();
}

