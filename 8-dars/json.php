
<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$json =  json_encode($age,JSON_PRETTY_PRINT);

// $obj = json_decode($json);

// print_r($obj);

// echo $obj->Ben;

$arr = json_decode($json,true);
print_r($arr);

echo $arr['Peter'];

?>
</pre>

</body>
</html>