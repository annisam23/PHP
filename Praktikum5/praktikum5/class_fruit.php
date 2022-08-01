<?php

//encapsulasi

//buat kelas
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n){
        $this->name=$n;
    }

    protected function set_color($n){//a protected function
        $this->color=$n;
    }

    private function set_weight($n){//a private function
        $this->weight=$n;
    }
}

//buat objek
$mango = new Fruit ();

//akses property
$mango->set_name("mango");//OK
$mango->set_color("red");//error
$mango->set_weight(900);//error
