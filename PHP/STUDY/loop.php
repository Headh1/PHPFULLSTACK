<?php

// $num = 5;

// 1. 기본 삼각형만들기
// for ($i=1; $i<6 ; $i++) { 
//     for ($j=0; $j<$i ; $j++) { 
//         echo "*";
//     }
//     echo"\n";
// }

// 2. 역삼각형 만들기
// for ($i=5; $i>0 ; $i--) { 
//     for ($j=0; $j<$i; $j++) { 
//         echo "*";
//     }
//     echo"\n";
// }

// 3. 삼각형 반대모양 만들기
// for ($a=$num; $a>0 ; $a--) { 
//     for ($b=1; $b <$a; $b++) { 
//         echo " ";
//     }
//     for ($b=$num-1; $b>$a ; $b--) { 
//         echo "*";
//     } 
//     echo "\n";
// }

// for ($a=$num-1; $a>0 ; $a--) { 
//     for ($b=0; $b <$a; $b++) { 
//         echo " ";
//     }
//     for ($b=$num-1; $b>=$a ; $b--) { 
//         echo "*";
//     } 
//     echo "\n";
// }


// 4. 역삼각형 반대모양 만들기
// for ($a=1; $a<6 ; $a++) { 
//     for ($b=0; $b<$a ; $b++) { 
//         echo " ";
//     }
//     for ($b=5; $b>$a; $b--) { 
//         echo "*";
//     }
//     echo "\n";
// }
?>

<?php
// for($a=1; $a<6; $a++){
//     for($b=0; $a>$b; $b++)
//     {echo"*";}
//     echo"\n";
// }

// for($a=5; $a>0; $a--){
//     for($b=0; $a>$b; $b++)
//     {echo"*";}
//     echo"\n";
// }

// for($a=0; $a<6; $a++){
//     for($b=0; $b<$a; $b++){
//         echo " ";
//     }
//     for($b=6; $b>$a; $b--){
//         echo "*";
//     }
//     echo "\n";
// }

// for($a=1; $a<6; $a++){
//     for($b=6; $b>$a; $b--){
//         echo " ";
//     }
//     for($b=0; $b<$a; $b++){
//         echo "*";
//     }
//     echo "\n";
// }

// for($a=1; $a <10; $a+=2){
//     for($b=9; $b>$a; $b-=2){
//         echo " ";
//     }
//     for($b=0; $b<$a; $b++){
//         echo "*";
//     }
//     echo "\n";
// }

for($a=1; $a<6; $a+=2){
    for($b=1; $b>$a; $b+=2){
        echo " ";
    }
    for($b=6; $b>$a; $b--){
        echo "*";
    }
    echo "\n";
}

?>

