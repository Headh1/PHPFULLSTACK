<?php
// 함수명 : my_db_conn
// 기능 : DB connect
// 파라미터 : pdo &$p_c
// 리턴 : 없음


function my_db( &$p_c){
    $host="localhost";
    $user="root";
    $password="root506";
    $name="employees";
    $charset="utf8mb4";
    $dns="mysql:host=".$host.";dbname=".$name.";charset=".$charset;
    $op=array(PDO::ATTR_EMULATE_PREPARES=>false,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);

$p_c = new PDO( $dns,$user,$password,$op);
}

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