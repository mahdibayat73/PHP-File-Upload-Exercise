<?php
session_start();
$msg = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["uploadBtn"]) && $_POST["uploadBtn"] == "Upload") {
        if (isset($_FILES["uploadedFile"]) && !empty($_FILES["uploadedFile"]["name"])) {
            // var_dump($_FILES["uploadedFile"]);
            $_FILES["uploadedFile"]["name"];
            $_FILES["uploadedFile"]["size"];
            $_FILES["uploadedFile"]["type"];
        } else {
            echo $msg = "Please select the file you want!";
        }
    }
}

$_SESSION["msg"] = $msg;
// header("location:../index.php");
