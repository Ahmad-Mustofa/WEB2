<?php
class Hero
{
    // atribut 
    public $name ;
    public $hp ;
    public $damage ;

    //method 
    public function __construct($name , $hp, $damage) 
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }

    // method
    public function getDetail(){
        echo "Name: $this->name <br>";
        echo "Health Poin: $this->hp <br>";
        echo "Damage: $this->damage <br>";
        echo "<br> ======================= <br>";
    }
}

// buat object
$hero1 = new Hero("Khufra", 3200, 230);
$hero1->getDetail();

$hero2 = new Hero('Odette', 2000, 2900);
$hero2->getDetail();

