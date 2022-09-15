<?php
    include 'ucitaj.php';
    $putovanja=$kom->sortirajPutovanja($_GET['sort']);
?>
<?php foreach($putovanja as $putovanje): ?>
    <h1 class="display-3"><?php echo $putovanje->naslov; ?></h1>
    <h4><?php echo $putovanje->drzava->naziv .', '.$putovanje->grad; ?></h4>
    <p class="lead"><?php echo $putovanje->opis; ?></p>
    <footer class="blockquote-footer">Napisao/la: <cite><?php echo $putovanje->ime .' '. $putovanje->prezime . ', datum: '.$putovanje->datum; ?></cite></footer>
    <img src="img/avion.gif" width="20%" id="gif"> 
    <p class="mb-0"><?php echo 'Ocena putovanja: '.$putovanje->ocena; ?></p>
    <a class="btn btn-danger" href="delete.php?sifra=<?=$putovanje->sifra ?>">Obrisi putovanje</a>
    <a class="btn btn-success" href="izmeniputovanje.php?sifra=<?=$putovanje->sifra ?>">Izmeni putovanje</a>
    <hr style="border-color: white; ">
<?php endforeach; ?>
