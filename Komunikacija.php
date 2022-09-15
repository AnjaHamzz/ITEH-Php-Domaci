<?php
      class Komunikacija {
          public $conn;
      public function __construct($conn){
          $this->conn=$conn;
      }

        public function vratiPutovanja(){
            $upit="SELECT * FROM putovanje p JOIN drzava d ON p.drzava=d.sifraDrzave";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $putovanja = array();
            foreach($niz as $element){
                
                $drzava= new Drzava();
                $drzava->sifra=$element["sifraDrzave"];
                $drzava->naziv=$element["naziv"];

                $putovanje = new Putovanje();
                $putovanje->sifra=$element["sifra"];
                $putovanje->ime=$element["ime"];
                $putovanje->prezime=$element["prezime"];
                $putovanje->naslov=$element["naslov"];
                $putovanje->opis=$element["opis"];
                $putovanje->datum=$element["datumPutovanja"];
                $putovanje->grad=$element["grad"];
                $putovanje->drzava=$drzava;
                $putovanje->ocena=$element["ocena"];

                $putovanja[]=$putovanje;
                
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $putovanja;
        }
        public function unesiPutovanje($putovanje){
            $ime=$putovanje->ime;
            $prezime=$putovanje->prezime;
            $naslov=$putovanje->naslov;
            $opis=$putovanje->opis;
            $drzava=$putovanje->drzava;
            $grad=$putovanje->grad;
            $datum=$putovanje->datum;
            $ocena=$putovanje->ocena;
            $upit="INSERT INTO putovanje(ime,prezime, naslov,opis,drzava,grad,datumPutovanja, ocena) VALUES ('$ime', '$prezime', '$naslov','$opis', '$drzava','$grad','$datum', '$ocena')";
            $rezultat=$this->conn->query($upit);
            
         

        } 
        public function vratiDrzave(){
            $upit ="SELECT * FROM drzava";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $drzave=array();
            foreach($niz as $element){
                $drzava=new Drzava();
                $drzava->sifra=$element["sifraDrzave"];
                $drzava->naziv=$element["naziv"];
                $drzave[]=$drzava;
            }
            return $drzave;
        }
        public function obrisiPutovanje($putovanje){
            $upit="DELETE FROM putovanje WHERE sifra=$putovanje->sifra";
            $rezultat=mysqli_query($this->conn, $upit);
            return $rezultat;
        }
        public function vratiPutovanjePoSifri($sifra){
            $upit="SELECT * FROM putovanje p JOIN drzava d ON p.drzava=d.sifraDrzave WHERE p.sifra=$sifra";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_assoc($rezultat);

            $drzava = new Drzava();
            $drzava->sifra=$niz['sifraDrzave']; 
            $drzava->naziv=$niz['naziv'];

            $putovanje = new Putovanje();
            $putovanje->sifra=$niz['sifra'];
            $putovanje->ime=$niz['ime'];
            $putovanje->prezime=$niz['prezime'];
            $putovanje->naslov=$niz['naslov'];
            $putovanje->opis=$niz['opis'];
            $putovanje->datum=$niz['datumPutovanja'];
            $putovanje->grad=$niz['grad'];
            $putovanje->ocena=$niz['ocena'];
            $putovanje->drzava=$drzava;

            return $putovanje;

        }
        public function izmeniPutovanje($putovanje){
            //echo $putovanje->sifra;
            $upit=" UPDATE putovanje SET ime='$putovanje->ime', 
                                         prezime='$putovanje->prezime', 
                                         naslov='$putovanje->naslov',
                                         opis='$putovanje->opis',
                                         datumPutovanja='$putovanje->datum',
                                         ocena=$putovanje->ocena,
                                         drzava=$putovanje->drzava,
                                         grad='$putovanje->grad'
                                    WHERE sifra={$putovanje->sifra} ";
            $rezultat=mysqli_query($this->conn, $upit);
        }
        public function pretraziPutovanja($pretraga){
            $upit="SELECT * FROM putovanje p JOIN drzava d ON p.drzava=d.sifraDrzave";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $putovanja = array();
            $putovanjaSva=array();
            foreach($niz as $element){
                if($pretraga == $element["sifraDrzave"]){
                $drzava= new Drzava();
                $drzava->sifra=$element["sifraDrzave"];
                $drzava->naziv=$element["naziv"];
                $putovanje = new Putovanje();
                $putovanje->sifra=$element["sifra"];
                $putovanje->ime=$element["ime"];
                $putovanje->prezime=$element["prezime"];
                $putovanje->naslov=$element["naslov"];
                $putovanje->opis=$element["opis"];
                $putovanje->datum=$element["datumPutovanja"];
                $putovanje->grad=$element["grad"];
                $putovanje->drzava=$drzava;
                $putovanje->ocena=$element["ocena"];
                $putovanja[]=$putovanje;
                }
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
           
            return $putovanja;
           
        }
        public function sortirajPutovanja($sort){
            $upit="SELECT * FROM putovanje p JOIN drzava d ON p.drzava=d.sifraDrzave ORDER BY p.ocena ". $sort;
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $putovanja = array();
            foreach($niz as $element){
                
                $drzava= new Drzava();
                $drzava->sifra=$element["sifraDrzave"];
                $drzava->naziv=$element["naziv"];

                $putovanje = new Putovanje();
                $putovanje->sifra=$element["sifra"];
                $putovanje->ime=$element["ime"];
                $putovanje->prezime=$element["prezime"];
                $putovanje->naslov=$element["naslov"];
                $putovanje->opis=$element["opis"];
                $putovanje->datum=$element["datumPutovanja"];
                $putovanje->grad=$element["grad"];
                $putovanje->drzava=$drzava;
                $putovanje->ocena=$element["ocena"];

                $putovanja[]=$putovanje;
                
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $putovanja;
        }
 
       
}
?>