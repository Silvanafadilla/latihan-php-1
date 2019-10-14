<?php
class Gaji{
    public $nama;
    public $nip;
    public $alamat;
    public $hk;

    public function __construct($nama, $nip, $alamat, $hk){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->hk = $hk;
    }

    public function Gaji_kotor(){
        $kotor = $this->hk * 75000;
        return $kotor;
    }

    public function Gaji_bersih(){
        $bersih = $this->Gaji_kotor() - ($this->Gaji_kotor()*0.025); 
        return $bersih;
    }

}
if (isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['hk'];
}
$hasil = new Gaji($a, $b, $c, $d);
echo "Nama : $a <br>";
echo "NIP : $b <br>";
echo "Alamat : $c <br>";
echo "Gaji Kotor : " . $hasil->Gaji_kotor()."<br>";
echo "Gaji Bersih : " .$hasil->Gaji_bersih();

?>