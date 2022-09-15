<?php
    include 'ucitaj.php';
    if(isset($_POST['update'])){
        $putovanje=new Putovanje();
        $putovanje->sifra=$_POST['sifra'];
        $putovanje->ime=$_POST['ime'];
        $putovanje->prezime=$_POST['prezime'];
        $putovanje->naslov=$_POST['naslov'];
        $putovanje->datum=$_POST['datum'];
        $putovanje->drzava=$_POST['drzava'];
        $putovanje->grad=$_POST['grad'];
        $putovanje->opis=$_POST['opis'];
        $putovanje->ocena=$_POST['ocena'];
        //var_dump($putovanje);
        $kom->izmeniPutovanje($putovanje);
    }else{
        return;
    }


?>
