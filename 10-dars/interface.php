<?php
//interface InterfaceName {
//    public function setName($name);
//
//    public function getName():string;
//
//}
//
//class ChildClass implements InterfaceName{
//
//    public $name;
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getName(): string
//    {
//        return $this->name;
//    }
//}
//
//$obj = new ChildClass();
//$obj->setName("Windows");
//echo $obj->getName();


?>


<?php
// Interface definition
interface Animal {
    public function makeSound();
}

// Class definitions
class Cat implements Animal {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
}
?>
