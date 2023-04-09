<pre>
<?php
// function my_callback($item) {
//     return strlen($item). " = >". $item;
//   }
  
//   $strings = ["apple", "orange", "banana", "coconut"];
  
//   $lengths = array_map("my_callback", $strings);
//   print_r($lengths);


// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map( function($item) { return strlen($item)." => ". $item; } , $strings);
// print_r($lengths);


//   $string2 = [];
//   foreach($strings as $item){
//     $string2[] = strlen($item). " =>". $item;
//   }

//   print_r($string2);


function exclaim($str) {
    return $str . "! ";
  }
  
  function ask($str) {
    return $str . "? ";
  }
  
  function printFormatted($str, $format) {
    echo $format($str);
  }
  
  // Pass "exclaim" and "ask" as callback functions to printFormatted()
  printFormatted("Hello world", "exclaim");
  printFormatted("Hello world", "ask");

?>
</pre>