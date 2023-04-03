<?php
include_once("./fncdbconn.php");

$obj = null;
my_db($obj);

$s=" SELECT * from employees limit :l_s ";
$a=array(":l_s"=>5);

$st= $obj->prepare($s);
$st->execute($a);
$re = $st->fetchAll();

var_dump($re);

$obj =null;

?>