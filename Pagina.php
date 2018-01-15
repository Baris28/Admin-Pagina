<?php
session_start();
if (isset($_SESSION["users"]) && $_SESSION["users"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["users"]["naam"]." op het admingedeelte van de website";
    echo "<p><a href='Admin.php'>login</a></p>";

} else {
    header("location: Admin.php");
    //terug naar inlogscherm
}