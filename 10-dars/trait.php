<?php
trait Name {
    public function setName($name){
        $this->name  = $name;
    }
    public function getName(){
        return $this->name;
    }
}

trait Age {
    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }
}

class Person {
    use Name, Age;
    public $name;
    public $age;
}

class Car{
    use Name, Age;
    public $name;
    public $age;
}

$obj = new Person();
$obj->setName("Zokir");
$obj->setAge(12);
echo $obj->getName(). " ". $obj->getAge();

echo "<br>";

$car = new Car();
$car->setName("Spark");
$car->setAge("5");
echo $car->getName()." ".$car->getAge();