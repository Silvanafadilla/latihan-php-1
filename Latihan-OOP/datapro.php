<?php
class Data {
    public $nama, $nik, $alamat, $umur;

    public function __construct($nama, $nik, $alamat, $umur){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }

    public function kk(){
        return "Nama : $this->nama <br>
                Nik : $this->nik <br>
                Alamat : $this->alamat <br>
                Umur : $this->umur <br>";
    }
}
if (isset($_POST['proses'])) {
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];

echo "<center> Data Keluarga </center>";
foreach ($a as $i => $value) {
  $warga = new Data($a[$i], $b[$i], $c[$i], $d[$i]);
  echo "<hr>";
  echo $warga->kk();
  echo "<hr>";
    }
}


?>