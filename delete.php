<?php
    include 'ucitaj.php';
    $sifra=trim($_GET['sifra']);
    $putovanje = new Putovanje();
    $putovanje->sifra=$sifra;
    if($kom->obrisiPutovanje($putovanje)){
        header("Location: putovanja.php");
    }

?>