<?php
class Laptop {
    //buat protected property
    protected $pemilik="Anto";
    public function Akses_pemilik() {
        return $this->pemilik;
    }
    protected function Hidupkan_laptop() {
        return "Hidupkan laptop";
    }
    public function Paksa_hidup() {
        return $this->Hidupkan_laptop();
    }
}
$laptop = new Laptop();
//jalankan method akses_pemilik
echo $laptop->Akses_pemilik();
//jalankan method paksa_hidup
echo $laptop->Paksa_hidup();

?>