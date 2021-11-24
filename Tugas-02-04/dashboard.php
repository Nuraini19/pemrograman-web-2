<?php
session_start();
include ('button.php');
if (!isset($_SESSION['username'])){
    header("location: login.php");
}
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <center>
    <body bgcolor="#A9A9A9"> 
        <h1>Nur Aini Awad - 20192205138</h1>
        <a href="logout.php">logout</a>
        </center>
    </body>
</html>