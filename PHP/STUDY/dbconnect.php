<?php
// $d = mysqli_connect("localhost","root","root506","employees",3306);
// var_dump($d);
// $r = mysqli_query($d,"SELECT emp_no,first_name from employees limit 10;");
// var_dump($r);

// $rr= mysqli_fetch_row($r);
// var_dump ($rr);

// while ($t=mysqli_fetch_row($r)){
//     var_dump ($t);
// }

// while ( $temp = mysqli_fetch_assoc($r)){
//     var_dump($temp["first_name"]);
// }

// mysqli_close($d);
$i1="F";
$i2=10020;
$i3=10;
$d = mysqli_connect("localhost","root","root506","employees",3306);
// $r = mysqli_query($d,"SELECT emp_no,first_name from employees limit 10;");
$s = $d->stmt_init();
$s->prepare("SELECT emp_no,first_name from employees where gender=? and emp_no<=? limit ?;");
$s->bind_param("sii",$i1,$i2,$i3);
$s->execute();
$s->bind_result($col1, $col2);
// $s->fetch();
// var_dump($col1,$col2);

while($s->fetch()){
    echo "$col1 $col2 \n";
}

// $r=$s->get_result();
// while($row=$r->fetch_assoc()){
//     var_dump($row);
// }


?>