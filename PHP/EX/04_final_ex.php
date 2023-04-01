<?php
// 1. 2개의 숫자를 입력받아 조건문을 이용하여 대소를 비교하는 프로그램
// $a=rand(0,100);
// $b=rand(0,100);

// if($a>$b){
//     echo $a." 가".$b." 보다 큽니다.";
// }
// else if($a<$b){
//     echo $b." 가".$a." 보다 큽니다.";
// }
// else{
//     echo $b." 가".$a." 같습니다.";
// }

    // <form method="POST">
    //     <input type="text" name="num1">
    //     <input type="text" name="num2">
    //     <button type="submit" name="go">cheak</button>
    // </form>
    // if (isset($_POST["go"])) {
    //     $num1 = $_POST["num1"];
    //     $num2 = $_POST["num2"];
    // $num1=$_POST["num1"];
    // $num2=$_POST["num2"];
//     if($num1>$num2){
//     echo $num1." 가".$num2." 보다 큽니다.";
// }
// else if($num1<$num2){
//     echo $num2." 가".$num1." 보다 큽니다.";
// }
// else{
//     echo $num1." 와".$num2." 같습니다.";
// }
//     }
    
// 2. 1부터 10까지 숫자 중 홀수만 출력하는 프로그램
// for($a=1; $a<11; $a++){
//     if($a%2!==0){
//         echo $a;
//     }
// }

// 3. 1부터 100까지 숫자 중 소수를 출력하는 프로그램
// for($a=1; $a<101; $a++){
//     $c=0;
//     for($b=1; $b<=$a; $b++){
//     if($a%$b==0){
//         $c++;
//     }
// }
// if($c == 2){
//     echo "$a ";
// }
// }

// 4. 1부터 1000까지 숫자 중 짝수의 합을 출력하는 프로그램
// $sum=0;
// for($a=2; $a<1001; $a++){
//     if($a%2==0){
//         $sum+=$a;
//     }
// }
// echo $sum;

// $sum=0;
// for($a=1; $a<51; $a++){
    //$sum+=$a;
    // }
    // echo $sum;

// 5. 2개의 정수를 입력받아 몫과 나머지를 구하는 프로그램
// $a=rand(-10,10);
// $b=rand(-10,10);
// $r=$a%$b;
// $rr=$b%$a;
// $c=($a-$r)/$b;

// if($a>$b){
//     echo $a." 와".$b."의 몫은 : ".$c." 나머지는 : ".$r;
// }
// else if ($a<$b){
//     echo $b." 와".$a."의 몫은 : ".$c." 나머지는 : ".$rr;
// }
// else{
//     echo "동일한 값을 입력했습니다.";
// }

// 6. while문을 이용하여 factorial값을 구하는 함수를 선언
// $a=1;
// $f=1;
// $n=7;
// while($a<$n){
//     $f=$f*$a;
//     $a++;
// }
// echo $f;

// 7. $a라는 변수의 값이 홀수이면 그 숫자 다음 숫자 다음 숫자인 짝수를 출력하고 $a의 값이 짝수이면 그 수를 출력
// $a=rand(0,100);
// if($a%2==1){
//     echo "원래 값은 $a ".$a+1;
// }
// else{
//     echo $a;
// }

function sum($p){
    $re=0;
    for($a=1; $a<=$p; $a++){
        $re+=$a;
        }
        echo $re;
}

sum(100);
    ?>
