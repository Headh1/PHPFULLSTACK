<?php
$d = mysqli_connect("localhost","root","root506","employees",3306);
// var_dump($d);
$r = mysqli_query($d,"SELECT emp_no,first_name from employees limit 10;");
// var_dump($r);

// $rr= mysqli_fetch_row($r);
// var_dump ($rr);

// while ($t=mysqli_fetch_row($r)){
//     var_dump ($t);
// }

while ( $temp = mysqli_fetch_assoc($r)){
    var_dump($temp["first_name"]);
}

mysqli_close($d);

?>