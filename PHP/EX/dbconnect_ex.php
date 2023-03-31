<?php
$d = mysqli_connect("localhost","root","root506","employees",3306);
$r = mysqli_query($d,"SELECT emp_no,concat(first_name,' ',last_name) as fullname ,gender,birth_date from employees where emp_no<=10005;");

// while($a=mysqli_fetch_assoc($r)){
//     var_dump($a);
// }

// while($a=mysqli_fetch_assoc($r)){
//     $re=implode($a);
//     echo $re."\n";
// }

// while($a=mysqli_fetch_assoc($r)){
//     echo implode(" ",$a),"\n";
// }

// mysqli_fetch_row($r);
// if(mysqli_num_rows($r) > 0){
//     while($a=mysqli_fetch_assoc($r)){
//         $re=implode($a);
//         echo $re."\n";
// }
// }
// else{
//         echo "내용이 없습니다.";
//     }

$row = mysqli_fetch_row($r);
if($row){
    do {
        $re = implode($row);
        echo $re."\n";
    } while ($row = mysqli_fetch_assoc($r));
} else {
    echo "내용이 없습니다.";
}

// if(mysqli_num_rows($r) > 0){
//     while($a=mysqli_fetch_assoc($r)){
//         echo "emp_no : ".$a["emp_no"]." fullname : ".$a["fullname"]." gender : ".$a["gender"]." birthday : ".$a["birth_date"]."\n";
// }
// }
// else{
//         echo "내용이 없습니다.";
//     }

// $f=false;
// while($a=mysqli_fetch_assoc($r)){
//     echo implode(" ",$a),"\n";
//     $f=true;
// }
// if(!$f){
//     echo "nothing";
// }


mysqli_close($d);
// ?>