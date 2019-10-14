<?php
    class Laptop {
        var $pemilik;
        var $merk;
        var $ukuran_layar;
        
        //buat method untuk class laptop
        function hidupkan_laptop(){
            return "Hidupkan Laptop";
        }
        function matikan_laptop(){
            return "Matikan Laptop";
        }

    }
    //buat objek class laptop
    $laptop_anto = new Laptop();
    
    //set property
    $laptop_anto->pemilik="Anto";
    $laptop_anto->merk="Asus";
    $laptop_anto->ukuran_layar="15 inc";

    //tampilkan property
    echo $laptop_anto->pemilik;
    echo "<br />";
    echo $laptop_anto->merk;
    echo "<br />";
    echo $laptop_anto->ukuran_layar;
    echo "<br />";

    //tampilkan method
    echo $laptop_anto->hidupkan_laptop();
    echo "<br />";
    echo $laptop_anto->matikan_laptop();    

?>