<?php
    header('Access-Control-Allow-Origin: *');
    require("Putovanje.php");
    require("Drzava.php");
    require("config.php"); 
    require("db.php"); 
    include("Komunikacija.php");
    $kom=new Komunikacija($conn);
?>