<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    header("location: index.php");
}