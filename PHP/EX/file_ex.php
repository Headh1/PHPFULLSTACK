<?php
// $a = fopen("../STUDY/file/구구단.txt","w");

// $n=10;
// for ($i=2; $i < $n; $i++) { 
//     fputs($a,"$i 단\n");
//     for ($j=1; $j < 10; $j++) { 
//         fputs($a,"$i * $j =".$i*$j."\n");
//     }
// }

// function g($n){
//     $r="";
//     for ($i=2; $i < 10; $i++) { 
//     $r .= "$i 단\n";
//     for ($j=1; $j < $n; $j++) { 
//         $r .= "$i * $j =$i*$j\n";
//     }
// }
// return $r;
// }
// fputs($a,g(10));

// function g($n){
//     $r = "$n 단\n";
//     for ($i=2; $i < 10; $i++) { 
//         $r .= "$i * $n =".$i*$n."\n";
//     }
//     return $r;
// }
// fputs($a,g(2));

// $f = "";
// for ($i=2; $i < 10; $i++) { 
//     $f="$i 단\n";
//     for ($j=1; $j < 10; $j++) { 
//         $c=$i*$j;
//         $f.="$i * $j = $c \n";
//     }
//     $f .= "\n";
//     fputs($a,$f);
// }

// 멜론 참외 사이에 체리 넣기
// $a = file("../STUDY/file/food.txt");
$a=fopen("../STUDY/file/food.txt","w");

$s = file("./file/food.txt");
$p ="";
foreach($s as $val){
    if(trim($val)==="참외"){
        $p .="체리\n".$val;
    }
    else{
        $p .=$val;
    }
}
print $p;


// fclose($a);
?>