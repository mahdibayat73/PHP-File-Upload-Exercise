<?php
session_start();
$msg = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["uploadBtn"]) && $_POST["uploadBtn"] == "Upload") {
        if (isset($_FILES["uploadedFile"]) && !empty($_FILES["uploadedFile"]["name"])) {
            // var_dump($_FILES["uploadedFile"]);
            $fileName = $_FILES["uploadedFile"]["name"];
            $fileSize = $_FILES["uploadedFile"]["size"];
            $fileType = $_FILES["uploadedFile"]["type"];
            $filePath = $_FILES["uploadedFile"]["tmp_name"];
            $fileNameSeprate = explode(".", $fileName);
            $fileExtention = strtolower(end($fileNameSeprate));
            $newFileName = md5(time() . $fileName) . "." . $fileExtention;
            $allowedFileExtentions = ["jpg", "jpeg", "png"];
            if (in_array($fileExtention, $allowedFileExtentions)) {
                $uploadFileDir = "../upload/";
                $destPath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($filePath, $destPath)) {
                    $msg = "Your file has been successfully uploaded.";
                } else {
                    $msg = "Error uploading the file!";
                }
            } else {
                $msg = "The file you want to upload is not allowed!";
            }
        } else {
            $msg = "Please select the file you want!";
        }
    }
}

$_SESSION["msg"] = $msg;
header("location:../index.php");
