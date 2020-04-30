<?php
    class laptop{
        var $model;
        var $harga;
        var $spek;

        public function __construct($model, $harga, $spek){
            $this->model = $model;
            $this->harga = $harga;
            $this->spek = $spek;
        }
        public function get_model(){
            return $this->model;
        }
        public function get_harga(){
            return $this->harga;
        }
        public function get_spek(){
            return $this->spek;
        }
    }
    abstract class oke {
        var $bisa;
        abstract public function model_promo();
        abstract public function harga_promo();

        public function __construct($bisa){
            $this->bisa = $bisa;
        }
        public function get_bisa(){
            return $this->bisa;
        }
    }
    
    class sip extends oke {
        public function model_promo(){
            echo "SELAMAT DATANG <br>";
            echo "Bermacam - macam merk disini !!! <br>";
            echo "Mulai dari Asus, Acer, HP, Lenovo hingga Apple <br>";
        }
        public function harga_promo(){
            echo "Harga sangat terjangkau disini <br>";
            echo "Cocok untuk para mahasiswa !!! <br>";
        }
        public function __construct($bisa){
            parent:: __construct($bisa);
        }
    }
    
    class mantap extends laptop {
        public function __construct($model, $harga, $spek){
            parent:: __construct($model, $harga, $spek);
        }   
    }
    $siap = new sip("Bima");
    $gas = new mantap("Macbook Pro", "Rp. 20.000.000", "i7, 16gb, 1tb");

    $siap->model_promo();
    $siap->harga_promo();
    echo "Langsung aja kak " .$siap->get_bisa(). "<br> Selamat Berbelanja :D";
    echo "<br>";
    echo "======================== <br>";
    echo "Laptop : " .$gas->get_model();
    echo "<br>";
    echo "Spek   : " .$gas->get_spek();
    echo "<br>";
    echo "Harga  : " .$gas->get_harga();
?>