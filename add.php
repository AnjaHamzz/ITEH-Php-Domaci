<?php
    include("ucitaj.php");
    

    if(isset($_POST['submit'])){ 
        $putovanje=new Putovanje();
        $putovanje->ime=mysqli_real_escape_string($conn,$_POST["ime"]);
        $putovanje->prezime=mysqli_real_escape_string($conn,$_POST["prezime"]);
        $putovanje->drzava=mysqli_real_escape_string($conn,$_POST["drzava"]);
        $putovanje->grad=mysqli_real_escape_string($conn,$_POST["grad"]);
        $putovanje->naslov=mysqli_real_escape_string($conn,$_POST["naslov"]);
        $putovanje->opis=mysqli_real_escape_string($conn,$_POST["opis"]);
        $putovanje->datum=mysqli_real_escape_string($conn,$_POST["datum"]);
        $putovanje->ocena=mysqli_real_escape_string($conn,$_POST["ocena"]);
    }else{
        return;
    }
    $kom->unesiPutovanje($putovanje);
?>