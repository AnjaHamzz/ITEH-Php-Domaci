<?php 
      require 'header.php'; 
      require 'add.php';
      
?>

<div class="jumbotron">
<div class="container">
<form width="50%" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
  <fieldset>

 

  <h1 class="display-4">Dodaj putovanje</h1>

    <div class="form-group">
      <input type="hidden" class="form-control"  name="sifra" value="">
    </div>
    <div class="form-group">
      <label for="name">Ime</label>
      <input type="text" class="form-control"  name="ime" placeholder="Unesite Vaše ime">
    </div>
    <div class="form-group">
      <label for="lastname">Prezime</label>
      <input type="text" class="form-control" name="prezime" placeholder="Unesite Vaše prezime">
    </div>
    <div class="form-group">
        <label for="date">Datum putovanja</label>
        <input type="date" class="form-control" name="datum"  placeholder="Unesite datum putovanja u formatu YYYY-MM-DD">
    </div>

    <div class="form-group">
    <label for="drzava">Drzava</label>
        <select id="drzava" name="drzava" class="form-control">
            <?php
                $drzave=$kom->vratiDrzave();
                foreach($drzave as $drzava):
            ?> 
            <option value = "<?=  $drzava->sifra; ?>"><?= $drzava->naziv; ?></option>
            <?php
              endforeach;

            ?>
            
        </select>
    </div>
    <div class="form-group">
      <label for="city">Grad</label>
      <input type="text" class="form-control" name="grad" placeholder="Unesite grad">
    </div>
    <div class="form-group">
      <label for="title">Naslov</label>
      <input type="text" class="form-control" name="naslov" placeholder="Unesite naslov bloga">
    </div>
    <div class="form-group">
      <label for="body">Opis putovanja</label>
      <textarea class="form-control" name="opis" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="grade">Ocenite vaše iskustvo od 1 do 5</label>
      <select class="form-control" name="ocena" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-primary" style="margin-left:auto;margin-right:auto;display:block;">Sačuvaj</button>
  </fieldset>
</form>
</div>
</div>
<?php  require 'footer.php'; ?>