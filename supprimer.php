<?php
    session_start();
    unset($_SESSION["users"][$_GET["cin"]]);
    header("Location: formulaire.php");
    exit();
?>