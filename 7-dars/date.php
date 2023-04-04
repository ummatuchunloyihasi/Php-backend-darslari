<?php
echo date('d- M, Y');
echo "<br>";

echo  date('H:i:s');
echo "<br>";

echo date('d-M, Y H:i:s');
echo "<br>";

$date = '12-Dec 2023 13:32:54';
echo date('Y-m-d H:i:s', strtotime($date)); 

echo "<br>";
echo date('d-M, Y',strtotime('-1 day'));
echo "<br>";
echo date('d-M, Y',strtotime('-1 week'));
echo "<br>";
echo date('d-M, Y',strtotime('-1 year'));

echo "<br>";
echo date('d-M, Y',strtotime('next Saturday'));


echo "<br>";
echo date('Y') - 2003;
?>