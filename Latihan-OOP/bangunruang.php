<?php
class Bangunruang{
    public $jari;
    public $kel;
    public $luas;
    
    public function __construct($jarijari){
        return $this->jari = $jarijari;
    }
    public function Hitung_keliling(){
        $this->kel = (2 * 3.14) * $this->jari;
        return $this->kel;
    }
    public function Hitung_luas(){
        $this->luas = 3.14 * $this->jari * $this->jari;
        return $this->luas;
    }
}
$lingkaran = new Bangunruang(14);

echo "Keliling lingkaran :" . $lingkaran->Hitung_keliling();
echo "<br>";
echo "Luas Lingkaran :" . $lingkaran->Hitung_luas();
?>