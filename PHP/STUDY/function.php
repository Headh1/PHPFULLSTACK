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

function rcc($a){
    if($a===1){
        return 1;
    }
    return $a*rcc($a-1);
}

echo rcc(5);
?>