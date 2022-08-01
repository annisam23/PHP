<?php
require_once ("classFruit.php");

//inheritance
class Strawberry extends Fruit{
    public function massage(){
        echo "am a fruit or a berry?";
    }
}

$straw = new Strawberry ("Strawberry","Red");
$straw->massage();
$straw->intro();
