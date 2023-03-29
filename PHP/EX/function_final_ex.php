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

// function star($s){
//     for($a=0; $a<$s; $a++){
//         echo "*";
//     }
//     echo"\n";
// }


// function star2($s){
//     for($a=0; $a<$s; $a++){
//         star($s);
//     }
// }

// function star3($s){
//     for($a=1; $a<$s; $a++){
//         star($a);
//     }
// }

// $s=rand(4,10);
// star3($s);

// function st($s){
//     for($a=$s-1; $a>=0; $a--){
//         echo"*";
//     }
//     echo"\n";
// }

// function bl($s){
//     for($a=0; $a<$s; $a++){
//         echo " ";
//     }
// }
// function star4($s){
//     for($a=1; $a<=$s; $a++){
//         bl($s-$a);
//         st($s);
//     }
// }

function st($s){
    for($a = $s; $a >= 1; $a--){
        echo "*";
    }
}

function bl($s){
    for($a = 1; $a <= $s; $a++){
        echo " ";
    }
}

function star4($s){
    for($a = 1; $a <= $s; $a++){
        bl($s-$a);
        st($a);
        echo "\n";
    }
}

star4(5);
?>