<?php
class Kamar {
    public $dalam = "Makanan karena lapar :) <br>";

    public function __construct(){
        echo "Masuk Kamar <br>";
    }
    public function Bersih(){
        echo "Membereskan kamar dan bersih-bersih <br>";
    }
    public function __destruct(){
        echo "Keluar Kamar <br>";
    } 
}
class Dapur extends Kamar{
    public function __construct(){
        parent::__construct();
        parent::__destruct();
        echo "Masuk dapur <br>";
    }
    public function Memasak(){
        echo "Memasak ";
    }
    public function __destruct(){
        echo "Keluar dapur <br>";
        parent::__construct();
    }
}
$masak = new Dapur();
$masak->Memasak();
echo $masak->dalam;

?>