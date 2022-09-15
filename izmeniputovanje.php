<?php 
      require 'header.php'; 
      require 'update.php';
      
?>
<?php 
      $update_sifra=trim($_GET['sifra']);
      //echo $update_sifra;
      $put=$kom->vratiPutovanjePoSifri($update_sifra);
      //echo $put->ime;
?>

<div class="jumbotron">
<div class="container">
<form width="50%" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
  <fieldset>
  <h1 class="display-4">Izmeni putovanje</h1>
    <div class="form-group">
      <input type="hidden" class="form-control"  name="sifra" value="<?= $put->sifra ?>">
    </div>
    <div class="form-group">
      <label for="name">Ime</label>
      <input type="text" class="form-control"  name="ime" value="<?= $put->ime ?>">
    </div>
    <div class="form-group">
      <label for="lastname">Prezime</label>
      <input type="text" class="form-control" name="prezime" value="<?= $put->prezime ?>">
    </div>
    <div class="form-group">
        <label for="date">Datum putovanja</label>
        <input type="date" class="form-control" name="datum" value="<?= $put->datum ?>">
    </div>

    <div class="form-group">
    <label for="drzava">Drzava</label>
        <select id="drzava" name="drzava" class="form-control">
            <?php
                $drzave=$kom->vratiDrzave();
                foreach($drzave as $drzava):
            ?> 
            <option value = "<?=$drzava->sifra; ?>"<?php if($drzava->sifra==$put->drzava->sifra){ echo 'selected'; }?>><?= $drzava->naziv ?></option>
            <?php
              endforeach;

            ?>
        </select>
    </div>
    <div class="form-group">
      <label for="city">Grad</label>
      <input type="text" class="form-control" name="grad" value="<?= $put->grad ?>">
    </div>
    <div class="form-group">
      <label for="title">Naslov</label>
      <input type="text" class="form-control" name="naslov" value="<?= $put->naslov ?>">
    </div>
    <div class="form-group">
      <label for="body">Opis putovanja</label>
      <textarea class="form-control" name="opis" rows="3"><?= $put->opis ?></textarea>
    </div>
    <div class="form-group">
      <label for="ocena">Ocenite vaše iskustvo od 1 do 5</label>
      <select id="ocena" name="ocena" class="form-control">
            <?php
                $ocene=array(1,2,3,4,5);
                foreach($ocene as $ocena):
            ?> 
            <option value = "<?=$ocena; ?>"<?php if($ocena==$put->ocena){ echo 'selected'; }?>><?= $ocena?></option>
            <?php
              endforeach;
            ?>
        </select>
    </div>
    <button type="submit" name="update" value="update" class="btn btn-primary" style="margin-left:auto;margin-right:auto;display:block;">Sačuvaj</button>
  </fieldset>
</form>
</div>
</div>
<?php  require 'footer.php'; ?>