<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// class Fruit {

//     public $name;

//     public $color;

//     function __construct($name, $color = 'Yashil')
//     {
//         $this->name = $name; 
//         $this->color = $color;
//     }

//     // function __destruct()
//     // {
//     //     echo "Name: ".$this->name." <br>";
//     //     echo "Color: ".$this->color." <br>";
//     // }

// }

// $apple = new Fruit("Olma","Qizil");
// echo $apple->color;


// class Auto {
//     public $name;
//     protected $number;
//     private $price;

//     function __construct($name, $number, $price)
//     {
//         $this->name = $name;
//         $this->number  = $number;
//         $this->price = $price;
//     }

//     function getNumber(){
//         return $this->number;
//     }

//     function getPrice(){
//         return $this->price;
//     }

// }

// $matiz =  new Auto("Matiz","777","4000");
// $matiz->name = "Matiz2";
// echo "Name: ".$matiz->name. "<br>";
// echo "Number: ".$matiz->getNumber(). "<br>";
// echo "Price: ".$matiz->getPrice(). "<br>";



class Person {
    public $ismi;
    protected $kasbi;
    private $yoshi;

    public function setYosh($yosh){
        $this->yoshi = $yosh;
    }

    public function getYosh(){
        return "Age: ".$this->yoshi;
    }
}


class Teacher extends Person{

    public function setKasb($kasbi){
        $this->kasbi = $kasbi;
    }

    public function getKasbi(){
        return $this->kasbi;
    }

}

class Quruvchi extends Person{

}

$teacher = new Teacher();
$teacher->ismi = "Odil";
$teacher->setKasb("O'qituvchi");
$teacher->setYosh("30");

echo $teacher->ismi;
echo "<br>";
echo $teacher->getKasbi();
echo "<br>";
echo $teacher->getYosh();

echo "<br>";
echo "<br>";

$ishchi2  = new Quruvchi();
$ishchi2->ismi = "Anvar";

$ishchi2->setYosh(20);
echo $ishchi2->ismi;
echo "<br>";
echo $ishchi2->getYosh();

?>