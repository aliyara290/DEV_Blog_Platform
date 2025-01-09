<?php 
session_start();
if($_SESSION["user"]["role"] !== "admin") {
    header("location: /deV.io/src/views/front/index.php");
}
if (!isset($_SESSION["user"])) {
    header("Location: /deV.io/src/views/front/login.php");
    exit();
}