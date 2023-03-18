<?php
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>


<?php
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?>