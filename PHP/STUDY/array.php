<?php
// $number= array("zero","one","two");
// echo $number[0];

// $zero="zero";
// $one="one";
// $two="two";

// $number= array($zero,$one,$two);
// echo $number[1];

// $number2 = array($number[0],$number[1],$number[2]);
// echo $number2[0];


// $week= array("sun","mon","tue","wed");

// $week2 = array($week[1],$week[3],$week[0],$week[2]);
// echo $week2[0];
// echo $week2[1];
// echo $week2[2];
// echo $week2[3];

// $ar_m = array("abc",1,3.14,'a');
// echo $ar_m[1];

// $ar_as = array("key1"=>"val1", "key2"=>"val2");
// echo $ar_as["key1"]; 

// $ar_te = array(
//             array(1,2,3,4) 
//             ,array(5,6,7,8)
//             ,array(
//                 array(9,10,11)
//             )
//         );
// echo $ar_te[1][0];
// $ar_te_3 =array(array(9,10,11));

// $week= array("sun","mon","del","tue","wed");
// unset($week[2]);
// print_r($week);

// $ar_dif1 = array("a","b","o");
// $ar_dif2 = array("a","b","ab");

// $ar_dif = array_diff($ar_dif1,$ar_dif2);
// print_r($ar_dif);

// $ar_as= array("b","a","c","d");
// asort($ar_as);
// print_r($ar_as);

// $ar_ar= array("b","a","c","d");
// arsort($ar_ar);
// print_r($ar_ar);

// $ar_ks= array("key1"=>"val1", "key3"=>"val3","key4"=>"val4", "key2"=>"val2");
// ksort($ar_ks);
// print_r($ar_ks);

// $ar_kr= array("가"=>"val1","나"=>"val3","라"=>"val4", "다"=>"val2");
// krsort($ar_kr);
// print_r($ar_kr);
// echo count($ar_kr);

// $arr1 = array("a"=>"apple","b"=>"banana","g"=>"grape", "w"=>"watermelon");
// foreach($arr1 as $key =>$val){
//     echo $key." : ".$val."\n";
// }

$ar= array("바다","산","강","숲");
foreach($ar as $val){
    echo $val."\n";
}
?>
