<?php
class induk {
    public $nama="sisil";
    public $umur= 16;

    public function Biodata(){
        return "Itu adalah nama dan umur saya";
    }
}
class anak extends induk {
    public function Bio(){
        return "Nama Saya : $this->nama, Umur saya : $this->umur";
    }
}
$namu = new anak();

$namu->nama;
$namu->umur;
echo $namu->Bio();
echo "<br><br>";
echo $namu->Biodata();

?>