<?php
$host="localhost";
$user="root";
$password="root506";
$name="employees";
$charset="utf8mb4";
$dns="mysql:host=".$host.";dbname=".$name.";charset=".$charset;
$op=array(PDO::ATTR_EMULATE_PREPARES=>false,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);

$obj = new PDO( $dns,$user,$password,$op);
// $s=" SELECT em.emp_no,sa.salary,em.birth_date FROM employees em INNER JOIN salaries sa ON em.emp_no=sa.emp_no
// WHERE (em.emp_no= :emp_no1 or em.emp_no= :emp_no2) AND sa.to_date>=now() ";
// $s=" SELECT "." em.emp_no"." ,sa.salary"." ,em.birth_date"."FROM"." employees em"." INNER JOIN salaries sa"." ON em.emp_no=sa.emp_no".
// "WHERE "." ("." em.emp_no= :emp_no1"." or em.emp_no= :emp_no2".")". " AND sa.to_date>=now() ";

// $ar_p=array(":emp_no1"=>10001 ,":emp_no2"=>10002);

// $st= $obj->prepare($s);
// $st->execute($ar_p);
// $re=$st->fetchAll();
// var_dump($re);

// foreach ($re as $value) {
//     echo "emp_no : ".$value["emp_no"]." / salary : ".$value["salary"],"\n";
// }

// $s=" INSERT INTO departments(dept_no,dept_name) values (:dept_no,:dept_name) ";
// $a= array(":dept_no"=>"d012",":dept_name"=>"PHP2");

// $st=$obj->prepare($s);
// $re=$st->execute($a);

// $obj->commit();
// var_dump($re);


$obj = null;

?>