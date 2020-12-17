<?php
        require_once("includes/config.php");
        require_once("includes/classes/PreviewProvider.php");
        require_once("includes/classes/CategoryContainers.php");
        require_once("includes/classes/Entity.php");
        require_once("includes/classes/EntityProvider.php");
        require_once("includes/classes/ErrorMessage.php");
        require_once("includes/classes/SeasonProvider.php");
        require_once("includes/classes/Season.php");
        require_once("includes/classes/Video.php");
    
        if(!isset($_SESSION["userLoggedIn"])) {
            header("Location: register.php");
        }
    
        $userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Wesflix</title>
        <link rel="stylesheet" href="assets/style/style.css" type="text/css" />

            <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/c720f9db4c.js" crossorigin="anonymous"></script>
            <script src="assets/js/script.js"></script>
    </head>
    <body>
        <div class="wrapper">
            
