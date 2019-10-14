<?php
class Laptop {
    //buat public property
    public $pemilik;

    //buat public method
    public function Hidupkan_laptop(){
        return "Hidupkan laptop";
    }
}
//buat objek dari class laptop
$laptop = new Laptop();

$laptop->pemilik="Anto";
echo $laptop->pemilik;
echo $laptop->Hidupkan_laptop();
?>