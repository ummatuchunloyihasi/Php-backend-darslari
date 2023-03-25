<?php



// $s = 0;
// $a = 0;
// while ($a < 100){
//     $a+=5;
//     echo $a." ";
// }



// $s = 0;
// for($i=0; $i<=100; $i+=5){
//     echo $i." "; 
// }



// $s = 0;
// $a = 0;
// do{
//     $a+=3;
//     $s+=$a;
//     echo $a." ";
// }while($a < 100);




// $arr = array(12,34,545,23,45,65,676,32);

// $s  = 0;
// foreach($arr as $a){
//     $s+=$a;
// }

// echo "Yigindi: S=".$s;



// for($i=1; $i<100; $i++){
//     if($i==7 or $i==10){
//         continue;
//     }
//     echo $i." ";
// }


function message(){
    echo "Hello world"; 
    echo "<br>";
}


function sum($a,$b){
    $s = $a+$b;
    echo $s;
    echo "<br>";
}


function hello($name = "Jasur"){
    echo "Salom ". $name;
    echo "<br>";
}


function universial($a,$b, $ch = '+'){
    switch($ch){
        case '+':
            $s = $a+$b;
            break;
        case '-':
            $s = $a - $b;
            break;
        case '/':
            $s = $a / $b;
            break;
        case '*':
            $s = $a*$b;
            break;
        default:
            echo "Noto'g'ri amal kiritdigiz";
            break;
    }
    echo $s;
    echo "\n";
}

universial(10,4);





?>