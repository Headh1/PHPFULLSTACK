<?php
// $ar=array(1,2,3,4,5);
// function my_len($ar){
//     $re=0;
//     foreach ($ar as $val) {
//         $re+=1;
//         // $re++;
//     }return $re;
// }

// echo my_len($ar);

// $i=6;
// for ($a=1; $a<=$i; $a--) { 
//     for ($b=0; $b<$a; $b++) { 
//         echo "*";
//     }
//     echo"\n";
// }

// function star($s){
//     for ($s=1; $s<6 ; $s++) { 
//             for ($a=0; $a<$s ; $a++) { 
//                 echo "*";
//             }
//             echo"\n";
//         }
// }
// echo star(1,2);

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

// echo star(1);

// function star3($s){
//     for($a=1; $a<$s; $a++){
//         star($a);
//     }
// }

star2(6);
?>