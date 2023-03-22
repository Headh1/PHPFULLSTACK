<?php
// 1. if문에 echo를 각각 주었을때
$s = 00;
if($s==100)
{echo "당신의 점수는 $s 점 입니다. <A+>";}
else if($s>=90)
{echo "당신의 점수는 $s 점 입니다. <A>";}
else if($s>=80)
{echo "당신의 점수는 $s 점 입니다. <B>";}
else if($s>=70)
{echo "당신의 점수는 $s 점 입니다. <C>";}
else if($s>=60)
{echo "당신의 점수는 $s 점 입니다. <D>";}
else
{echo "당신의 점수는 $s 점 입니다. <F>";}

?>

<?php
// 2. 등급에 변수를 줘서 echo를 한번만 쓰게 한다.
$s = 60;
if($s===100){$r="A+";}
else if($s>=90){$r="A";}
else if($s>=80){$r="B";}
else if($s>=70){$r="C";}
else if($s>=60){$r="D";}
else{$r="F";}

echo "당신의 점수는 $s 점 입니다. 등급 $r";

?>

<?php
// 3. and연산자를 사용해서 만들어본다.
$s = 100;
if($s==100){$r="A+";}
else if($s<100 && $s>=90){$r="A";}
else if($s<90 && $s>=80){$r="B";}
else if($s<80 && $s>=70){$r="C";}
else if($s<70 && $s>=60){$r="D";}
else{$r="F";}

echo "당신의 점수는 $s 점 입니다. 등급 $r";

?>

<?php
// 4. 모든걸 변수로 만들어본다.
$s = 101;
$d = "당신의 점수는";
$n = "점 입니다.";
if($s==100){$r="A+";}
else if($s<100 && $s>=90){$r="A";}
else if($s<90 && $s>=80){$r="B";}
else if($s<80 && $s>=70){$r="C";}
else if($s<70 && $s>=60){$r="D";}
else{$r="F";}

echo $d.$s.$n.$r;

?>

<?php
// 5. 잘못된값을 입력하게 만들기 실패한거
$s = 60;
$d = "당신의 점수는";
$n = "점 입니다.";
if($s<=100){$r="A+";}
else if($s<100 && $s>=90){$r="A";}
else if($s<90 && $s>=80){$r="B";}
else if($s<80 && $s>=70){$r="C";}
else if($s<70 && $s>=60){$r="D";}
else if($s<60 && $s>=0){$r="F";}
else{ echo "잘못된 값을 입력 했습니다.";}

echo $d.$s.$n.$r;

?>

<?php
// 6. if 중첩을 사용
$s = -0;
if($s<=100 && $s>=0){
    if ($s==100){$r="A+";}
    else if($s>=90){$r="A";}
    else if($s>=80){$r="B";}
    else if($s>=70){$r="C";}
    else if($s>=60){$r="D";}
    else {$r="F";}
    echo "당신의 점수는 $s 점 입니다. 등급 $r";
}
else{ echo "잘못된 값을 입력 했습니다.";}

?>

<?php
// 7. 웃긴방법
$s = 0;
if($s==100)
{echo "당신의 점수는 $s 점 입니다. <A+>";}
else if($s<100 && $s>=90)
{echo "당신의 점수는 $s 점 입니다. <A>";}
else if($s<90 && $s>=80)
{echo "당신의 점수는 $s 점 입니다. <B>";}
else if($s<80 && $s>=70)
{echo "당신의 점수는 $s 점 입니다. <C>";}
else if($s<70 && $s>=60)
{echo "당신의 점수는 $s 점 입니다. <D>";}
else if($s<60 && $s>=0)
{echo "당신의 점수는 $s 점 입니다. <F>";}
else{
    echo "잘못";
}

?>

<?php
// 7. 또 다른 방법
$s = 100;
if($s <0 || $s>100){
    echo "잘못된 값을 입력 했습니다.";
}
else{
    if ($s==100){$r="A+";}
    else if($s>=90){$r="A";}
    else if($s>=80){$r="B";}
    else if($s>=70){$r="C";}
    else if($s>=60){$r="D";}
    else {$r="F";}
    echo "당신의 점수는 $s 점 입니다. 등급 $r";
}

?>

<?php
// 8. 스위치문으로 만들기
$s = -30;
switch ($s) {
    case $s==100:
        echo "당신의 점수는 $s 점 입니다. <A+>";
        break;
    case $s<100 && $s>=90:
        echo "당신의 점수는 $s 점 입니다. <A>";
        break;
    case $s<90 && $s>=80:
        echo "당신의 점수는 $s 점 입니다. <B>";
        break;
    case $s<80 && $s>=70:
        echo "당신의 점수는 $s 점 입니다. <C>";
        break;
    case $s<70 && $s>=60:
        echo "당신의 점수는 $s 점 입니다. <D>";
        break;
    case $s<60 && $s>=0:
        echo "당신의 점수는 $s 점 입니다. <F>";
        break;
    default:
        echo "잘못된 값을 입력 했습니다.";
        break;
}
?>

<?php
// 9. 규칙이 가벼워진 스위치문으로 만들기
$s = -30;
switch ($s) {
    case 100:
        echo "당신의 점수는 $s 점 입니다. <A+>";
        break;
    case 90:
        echo "당신의 점수는 $s 점 입니다. <A>";
        break;
    case 80:
        echo "당신의 점수는 $s 점 입니다. <B>";
        break;
    case 70:
        echo "당신의 점수는 $s 점 입니다. <C>";
        break;
    case 60:
        echo "당신의 점수는 $s 점 입니다. <D>";
        break;
    default:
        echo "당신의 점수는 $s 점 입니다. <F>";
        break;
}
?>
