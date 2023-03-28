<?php
// $a=1;
// $b=2;
// $s=$a+$b;
// echo $s;

// function f_add($a,$b){
//     $sum=$a+$b;
//     return $sum;
// }
// $re = f_add(1,2);
// echo $re;

// function f_a_add(){
//     $ar = func_get_args();
//     $sum=0;
//     foreach ($ar as $val) {
//         $sum+= $val;
//     }
//     return $sum;
// }
// echo f_a_add(1,2,3,4);

// function rcc($a){
//     if($a===1){
//         return 1;
//     }
//     return $a*rcc($a-1);
// }
// echo rcc(5);


// function f_add(){
//     global $a;
//     $a=$a+10;
//     return $a;
// }
// // echo f_add(5);
// $a = 5;
// echo f_add();

// function f_add(){
//     static $a=1;
//     echo $a."\n";
//     $a++;
//         return $a;
//     }
//     for($a=0; $a<3; $a++){
//         f_add();
//     }

// function f_val($a,$b){
//         $a=3;
//         $b=4;
//         // echo "함수 : ",$a," ",$b,"\n";
//     }
//     $a=1;
//     $b=2;
//     f_val(5,6);
//     echo $a," ",$b;

function f_val(&$a,&$b){
            $a=3;
            $b=4;
        }
        $i_a=1;
        $i_b=2;
        f_val($i_a,$i_b);
        echo $i_a," ",$i_b;
?>