
<?php
$a=2;
$g = rand(0,2);
// 주먹 0 보 1 가위 2

if($g>$a){
    if($g===2 && $a===1){
        echo "가위($g) 보($a) 가위가 이겼습니다.";
        // echo "가위($g) 보($a)";
    }
    else if($g===2 && $a===0){
        echo "가위($g) 주먹($a) 주먹이 이겼습니다.";
        // echo "가위($g) 주먹($a)";
    }
    else{
        echo "보($g) 주먹($a) 보가 이겼습니다.";
        // echo "보($g) 주먹($a)";
    }
}
else if($g<$a){
    if($g===1 && $a===2){
        echo "보($g) 가위($a) 가위가 이겼습니다.";
        //echo "보($g) 가위($a)";
    }
    else if($g===0 && $a===2){
        echo "주먹($g) 가위($a) 주먹이 이겼습니다.";
        // echo "주먹($g) 가위($a)";
    }
    else{
        echo "주먹($g) 보($a) 보가 이겼습니다.";
        // echo "주먹($g) 보($a)";
    }
}
else{
    echo "$g 와 $a 는 비겼습니다.";
}
?>

<?php
$a=2;
$g = rand(0,2);
// 주먹 0 보 1 가위 2

if($g>$a){
    if($g===2 && $a===1){
        echo "가위($g) 보($a) 가위가 이겼습니다.";
        // echo "가위($g) 보($a)";
    }
    else if($g===2 && $a===0){
        echo "가위($g) 주먹($a) 주먹이 이겼습니다.";
        // echo "가위($g) 주먹($a)";
    }
    else{
        echo "보($g) 주먹($a) 보가 이겼습니다.";
        // echo "보($g) 주먹($a)";
    }
}
else if($g<$a){
    if($g===1 && $a===2){
        echo "보($g) 가위($a) 가위가 이겼습니다.";
        //echo "보($g) 가위($a)";
    }
    else if($g===0 && $a===2){
        echo "주먹($g) 가위($a) 주먹이 이겼습니다.";
        // echo "주먹($g) 가위($a)";
    }
    else{
        echo "주먹($g) 보($a) 보가 이겼습니다.";
        // echo "주먹($g) 보($a)";
    }
}
else{
    if($g===0 && $a===0){echo "주먹($g) 와 주먹($a) 비겼습니다.";}
    else if($g===1 && $a===1){echo "보($g) 와 보($a) 비겼습니다.";}
    else{echo "가위($g) 와 가위($a) 비겼습니다.";}
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction : column;
            flex-wrap: wrap;
            justify-content:center;
            align-items:center;
            width: 100vw;
            height: 100vh;
        }
        h1{
            font-size: 150px;
        }
        div{
            font-size: 30px;
            
        }
    </style>
</head>
<body>
    <h1>✌️ ✊ 🖐️</h1>
    <form method="post" class=ff>
        <label> 선택하세요 </label>
        <select name="c">
            <option value="✊">주먹</option>
            <option value="🖐️">보</option>
            <option value="✌️">가위</option>
        </select>
        <button type="submit">go</button>
</form>
<?php
    $a=$_POST['c'];
    $b=array('✊','🖐️','✌️');
    $i = rand(0,2);
    $g=$b[$i];

if($a==$g){
    echo "<div>비겼습니다!</div>";
}
else if ($a==0 && $g==1){
    echo "<div>졌습니다!</div>";
}
else if ($a==0 && $g==2){
    echo "<div>이겼습니다!</div>";
}
else if ($a==1 && $g==0){
    echo "<div>이겼습니다!</div>";
}
else if ($a==1 && $g==2){
    echo "<div>졌습니다!</div>";
}
else if ($a==2 && $g==0){
    echo "<div>졌습니다!</div>";
}
else {
    echo "<div>이겼습니다!</div>";
}



echo "<div class= uc>유저 $a 컴퓨터는 $g</div>";
    ?>
</body>
</html>