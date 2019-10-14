<?php
class Komputer {
    public $processor = "Intel Core I 7";
    public function __construct(){
        echo "Construct dari komputer <br>";
    }
    public function __destruct(){
        echo "Destruct dari komputer <br>";
    }
}
class Laptop extends Komputer {
    public function __construct(){
        parent::__construct();
        echo "Construct dari Laptop <br>";
    }
    public function spesifikasi(){
        echo "Spesifikasi Laptop :";
    }
    public function __destruct(){
        echo "Destruct dari Laptop <br>";
        parent::__destruct();
    }
}
$asus = new Laptop();
$asus->spesifikasi();
echo $asus->processor . "<br>";
?> 