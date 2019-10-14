<?php
class Aritmatika {
    public $bil1;
    public $bil2;
    
    public function __construct($bil1, $bil2){
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }

    public function Tambah(){
        $tambah = $this->bil1 + $this->bil2;
        return "Hasil pertambahan [$this->bil1 + $this->bil2] : $tambah <br>";
    }
    
    public function Kurang(){
        $kurang = $this->bil1 - $this->bil2;
        return "Hasil Pengurangan [$this->bil1 - $this->bil2] : $kurang <br>";
    }

    public function Kali(){
        $kali = $this->bil1 * $this->bil2;
        return "Hasil Perkalian [$this->bil1 * $this->bil2] : $kali <br>";
    }

    public function Bagi(){
        $bagi = $this->bil1 / $this->bil2;
        return "Hasil Pembagian [$this->bil1 / $this->bil2] : $bagi <br>";
    }
}
if (isset($_POST['simpan'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];

}
echo "<center>Hasil Perhitungan </center><br>";
$hasil = new Aritmatika($a, $b);
echo $hasil->Tambah();
echo $hasil->Kurang();
echo $hasil->Kali();
echo $hasil->Bagi();
?>