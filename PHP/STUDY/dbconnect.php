<?php
$d = mysqli_connect("localhost","root","root506","employees",3306);
// var_dump($d);
$r = mysqli_query($d,"SELECT emp_no from employees");
var_dump($r);
mysqli_close($d);
?>