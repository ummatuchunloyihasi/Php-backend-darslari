<?php

// $arr =  array("Duyshanba","Seyshanba","Chorshanba","Payshanba","Juma","Shanba","Yakshanba");


// foreach($arr as $a){
//     echo $a." ";
// }

//echo count($arr);

// for($i = 0; $i < count($arr);$i++){
//     echo $arr[$i]." ";
// }


// $arr = [
//     'name'=>"Jasur",
//     "lastname"=>"Xolmedov",
//     'davlat'=> 'O\'zbekiton'
// ];

// echo "<pre>";
// print_r($arr);
//echo $arr['lastname'];

// foreach($arr as $key=>$value){
//     echo "Key:".$key." Qiymati: ".$value."<br>";
// }

function dump($arra){
    echo "<pre>";
        print_r($arra);
    echo "</pre>";
}

// $arry = [
//     'raqamlar'=>[1,2,3,4,5,6,88],
//     'sozlar'=>['asd','asdsa','wedew','dewwe','sd'],
// ];

// foreach($arry as $key=>$arr1){
//     echo $key."<br>";
//     foreach($arr1 as $value){
//         echo $value." ";
//     }
//     echo "<br>";
// }



$array = ["asdasd","uashda","basdjasd","opoasd"];

dump($array);

rsort($array);

dump($array);

?>

