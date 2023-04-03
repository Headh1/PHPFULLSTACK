<?php
// 1. 배열의 길이를 확인하는 프로그램
// $ar=array(1,2,3,4,5,6,7,8,9);

// echo count($ar);

// $c=0;
// foreach ($ar as $val) {
//     $c++;
//     }
// echo $c;

// 2. 배열을 내림차순으로 정렬하는 프로그램
// $ar=array(3,2,6,1,7);
// for($a=0; $a<count($ar); $a++){
//     for($b=$a; $b<count($ar); $b++){
//     if($ar[$a]>$ar[$b]){
//         $c=$ar[$a];
//         $ar[$a]=$ar[$b];
//         $ar[$b]=$c;
//     }
// }
//     print_r($ar);
// }
// 3. 크기가 3x3인 행렬의 곱
// $ar1=array(array(1,2,3),array(1,2,3),array(1,2,3));
// $ar2=array(array(1,2,3),array(1,2,3),array(1,2,3));

// for($a=0; $a<count($ar1); $a++){
//     for($b=0;$b<count($ar2[$a]); $b++){
//         $i=0;
//         for($c=0; $c<count($ar2[$a]); $c++){
//             $i+=$ar1[$a][$c]*$ar2[$c][$b];
//         }
//         $ar3[$a][$b]=$i;
//     }
// }

// foreach ($ar3 as $val) {
//     foreach ($val as $v) {
//         echo $v." ";
//     }
//     echo "\n";
// }

// 4. 두 배열의 값을 비교하여 서로 가지고 있지 않은 값을 출력하는 프로그램
// $ar1=array(1,2,3,4,5);
// $ar2=array(4,5,6,7,8);

// $re1=array_diff($ar1,$ar2);
// $re2=array_diff($ar2,$ar1);

// foreach ($re1 as $val) {
//     echo $val;
// }
// foreach ($re2 as $val) {
//     echo $val;
// }
// echo $re2;

// 5. "삭제"의 값을 지우고 출력하는 프로그램
// $ar=array("a"=>"apple", "b"=>"banana","삭제"=>"de", "c"=>"cool");
// foreach ($ar as $key => $val) {
//     if($key=="삭제"){
//         unset($ar[$key]);
//     }
//     else{
//         echo $key." : ".$val."\n";
//     }
// }
?>