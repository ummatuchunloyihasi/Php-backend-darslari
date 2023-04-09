<pre>
<?php

function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("No'lgan bo'lish mumkun emas");
    }
    return $dividend / $divisor;
  }
  
//   echo divide(5, 0);

try{

    echo divide(5, 0);

}catch(Exception $e){

    print_r($e->getMessage());

}

?>
</pre>