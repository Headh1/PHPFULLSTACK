<?php
// function f_sub($a,$b){
//     $sub = $a-$b;
//     return $sub;
//     return $a-$b;
// }

// function f_rem($a,$b){
//     $rem = $a/$b;
//     return $rem;
// }

// function f_mul($a,$b){
//     $mul = $a*$b;
//     return $mul;
// }

// $re_sub = f_sub(4,2);
// $re_rem = f_rem(4,2);
// $re_mul = f_mul(4,2);

// echo "뺄셈 : ".$re_sub."\n"."나누기 : ".$re_rem."\n"."곱하기 : ".$re_mul;
// echo "\n";
// echo "뺄셈 : ".f_sub(4,2)."\n"."나누기 : ".f_rem(4,2)."\n"."곱하기 : ".f_mul(4,2);
// echo "뺄셈 : ".f_sub(2,4);

// function f_sub($a,$b){
//     if($a<$b){
//         $sub = $b-$a;
//         return $sub;
//     }
//     else{$sub = $a-$b; return $sub;}
    
// }
// echo f_sub(2,6);

// function f_sub($a,$b){
//     if($a<$b){
//         return $b-$a;
//     }
//     else{return $a-$b;}
    
// }
// echo f_sub(2,6);

// function f_a_sub(){
//     $ar = func_get_args();
//     $sub=20;
//     foreach ($ar as $val){
//         $sub-=$val;
//     }
//     return $sub;
// }
// echo f_a_sub(20,2,5);


// function f_a_sub2(){
//     $ar = func_get_args();
//     $sub=0;
//     $ar[0]=$ar[0]*-1;
//     foreach ($ar as $val){
//         $sub-=$val;
//     }
//     return $sub;
// }
// echo f_a_sub2(20,3,5);

// function f_a_sub3(){
//     $ar = func_get_args();
//     $sub= null;
//     foreach ($ar as $val){
//         if( is_null($sub)){
//             $sub=$val;
//         }
//         else{
//             $sub -= $val;
//         }
//     }
//     return $sub;
// }
// echo f_a_sub3(20,2,5);

// function f_a_sub4(){
//     $ar = func_get_args();
//     $sub=0;
//     foreach ($ar as $val){
//         if($sub){$sub=$val*-1;} 
//         else{$sub-=$val;}
//     }
//     return $sub;
// }
// echo f_a_sub4(20,2,5);

// function f_a_mul(){
//     $ar = func_get_args();
//     $mul=1;
//     foreach ($ar as $val){
//         $mul*=$val;
//     }
//     return $mul;
// }
// echo f_a_mul(1,2,3,4);

// function f_a_div(){
//     $ar = func_get_args();
//     $div=0;
//     foreach ($ar as $val){
//         if($div==0){$div=$ar[0];} 
//         else{$div/=$val;}
//     }
//     return $div;
// }
// echo f_a_div(10,2,5);

?>