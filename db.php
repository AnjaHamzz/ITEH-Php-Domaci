<?php
      $conn=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      if(mysqli_connect_errno()){
          //echo "Neuspesno konektovanje na MySQL".mysqli_connect_errno();
  
      }else{
          //echo "Uspesno konektovanje na MySQL";
          
      }  
?>