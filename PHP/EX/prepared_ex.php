<?php
$i1 = "9999-01-01";
$i2 = 50000;
$i3 = 5;
$d = mysqli_connect("localhost","root","root506","employees",3306);
$s = $d->stmt_init();
$s->prepare("SELECT emp_no,salary from salaries where to_date=? and salary >=? order by salary desc limit ?");
$s->bind_param("sii",$i1,$i2,$i3);
$s->execute();
$s->bind_result($col1 ,$col2);
// $s->fetch();

// $r=$s->get_result();
// while($row=$r->fetch_assoc()){
//     var_dump($row);
// }


while($s->fetch()){
    echo "emp_no : $col1 salary : $col2 \n";
}

$d->close();
?>