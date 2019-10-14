<?php
class Laptop {

    //buat property untuk class laptop
    public $pemilik;
    public $merk;
    public $ukuran_layar;

    //buat methhod untuk class laptop
    public function Hidupkan_laptop(){
        return "Hidupkan laptop";
    }
    public function Matikan_laptop(){
        return "Matikan laptop";
    }
}

//buat objek dari class laptop
$laptop_anto = new Laptop();
$laptop_andi = new Laptop();

?>