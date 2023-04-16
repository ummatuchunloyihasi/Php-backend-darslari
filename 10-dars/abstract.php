<?php
abstract class ParentClass {
    abstract public function setName($name);

    abstract public function getName():string;
}

class ChildClass extends ParentClass{

    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$obj = new ChildClass();

$obj->setName("Jahongir");
echo $obj->getName();


?>