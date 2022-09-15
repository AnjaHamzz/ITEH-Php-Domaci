<?php
 include 'ucitaj.php';
?>

<?php  require 'header.php'; ?>
<div class="jumbotron">
<div class="container">
<fieldset>

        <img src="img/proces.gif" width="25%" style="margin-left:auto;margin-right:auto;display:block;border-radius:10px" id="gif">
       <label for="sort">Sortiraj po oceni</label>
            <select class="form-control" id="sort" name="sort" onchange="sortiraj(this.value)">
                <option value="asc">Rastuce po oceni</option>
                <option value="desc">Opadajuce po oceni</option>
            </select>
        <br>
        <div class="col-md-12 mx-auto text-center mb-5 section-heading">
            <div id="rezultatSortiranja"></div>
        </div>
</div>
</div>
</fieldset>
<?php  include 'footer.php'; ?>
<script>
    function sortiraj(sort){
        $.ajax({
          url: 'sortiraj.php',
          type:'GET',
          data: {sort : sort},
          success: function(data){
            $("#rezultatSortiranja").html(data);
          }
        });
    }
    sortiraj('asc');
  </script>
  <?php  include 'footer.php'; ?>