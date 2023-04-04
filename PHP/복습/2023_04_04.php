<?php
// while+if
// $i=0;
// while($i<=4){
//     if($i === 1){
//         echo"1\n";
//     }
//     else if($i === 4){
//         echo "4";
//     }
//     ++$i;
// }

// $ar = ["a"=>1,"b"=>2,"c"=>3,"d"=>4];
// foreach ($ar as $key=> $val) {
//     echo "$key : $val\n";
// }

// foreach ($ar as $key => $val) {
//     if($key === "c"||$val === 2){
//         echo"if\n";
//     }
// }

// for($i=2; $i<=9; $i++){
//     echo "$i 단\n";
//     for($j=1; $j<10; $j++){
//         echo "$i x $j = ".$i*$j."\n";
//     }

// }

// $sum=0;
// for($a=1; $a<101; $a++){
//     if($a%2==0){
//         $sum+=$a;
//     }
// }
// echo $sum;

// $sum=0;
// for($a=1; $a<101; $a++){
//     if($a%2!==0){
//         $sum+=$a;
//     }
// }
// echo $sum;

// $ar=array("a"=>1,"b"=>2,"info"=>
//             array("info_a"=>3,"info_b"=>4,"info_arr"=>
//                 array("f_1"=>5,"f_2"=>7)));
// $ar1=array(1,2,array(3,4,array(5,6,7)));

// echo $ar["info"]["info_a"];
// echo"\n";
// echo $ar["info"]["info_arr"]["f_2"];

// $ar2=array(1,2,
//             array("info_a"=>3,"info_b"=>4,"info_arr"=>
//                 array("f_1"=>5,"f_2"=>7)));
// echo $ar2[2]["info_arr"]["f_1"];

// function fnc_sum( $param_a, $param_b){
//     $sum=$param_a+$param_b;
    
//     return $sum;
// }
// $a=rand(0,50);
// $b=rand(0,50);
// echo "$a+$b = ".fnc_sum($a,$b);

// function fnc_sum2( ...$param){
//     $sum=0;
//     foreach ($param as $val) {
//         $sum += $val;
//     }
//     return array_sum($param);
//     }
// echo fnc_sum2(3,4,5,6);

// function fnc_global(){
//     global $global_i;
// }
// $global_i =5;

// echo $global_i;

// function fnc_static(){
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();

// function fnc_reference(&$param_str){
//     $param_str ="fnc_reference";
// }
// $str="aaa";
// fnc_reference($str);
// echo $str;

// function s($a){
//     for($i=0; $i<$a; $i++){
//         echo"*";
//     }
// }

// function star($a){
//     for($i=0; $i<$a; $i++){
//         s(6);
// }
// echo "\n";
// }

// echo s(6);
// echo star(6);

function star($s){
    for($a=0; $a<$s; $a++){
        echo "*";
    }
    echo"\n";
}


function star2($s){
    for($a=0; $a<$s; $a++){
        star($s);
    }
}

function star3($s){
    for($a=1; $a<$s; $a++){
        star($a);
    }
}
star3(6);
?>