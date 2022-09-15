<?php
 include 'ucitaj.php';

?>

<?php  require 'header.php'; ?>
<div class="jumbotron">
<div class="container">
<fieldset>
    <img src="img/krug.gif" width="15%" style="margin-left:auto;margin-right:auto;display:block;" id="gif">
       <label for="pretraga">Pretraga po državi</label>
        <select id="pretraga" onchange="pretrazi(this.value)" class="form-control">
            <option value="all">Sve</option>
                <?php
                    $drzave=$kom->vratiDrzave();
                    foreach($drzave as $drzava):
                ?> 
                <option value = "<?=  $drzava->sifra; ?>"><?= $drzava->naziv; ?></option>
                <?php
                endforeach;

                ?>
        </select>
        <br>
        <div class="col-md-12 mx-auto text-center mb-5 section-heading">
            <div id="rezultat"></div>
        </div>
</div>
</div>
</fieldset>
<script>
    function pretrazi(pretraga){
        $.ajax({
          url: 'pretraga.php',
          type:'GET',
          data: {pretraga : pretraga},
          success: function(data){
            $("#rezultat").html(data);
          }
        });
    }
    pretrazi('all');
  </script>
<?php  include 'footer.php'; ?>