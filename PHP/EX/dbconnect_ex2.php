<?php
include_once("../STUDY/db_fncconnect.php");

$obj=null;
my_db($obj);
// 1. 전체 월급의 평균
// $s1=" SELECT avg(salary) from salaries where to_date>=now()";
// $st=$obj->prepare($s1);
// $st-> execute();
// $re = $st->fetchAll();

// var_dump($re);

// $obj=null;
// 2. 새로운 사원 정보를 employees테이블에 등록
// $s2=" INSERT INTO employees(emp_no,birth_date,first_name,last_name,gender,hire_date) 
// values(:emp_no,:birth_date,:first_name,:last_name,:gender,:hire_date)";
// $a= array(":emp_no"=>"600000",":birth_date"=>"2222-02-02",":first_name"=>"jin a",":last_name"=>"KIM",":gender"=>"M",":hire_date"=>"2222-01-02");

// $st=$obj->prepare($s2);
// $re=$st->execute($a);
// $obj->commit();
// var_dump($re);

// 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍"으로 변경
// $s3=" UPDATE employees SET first_name= :first_name, last_name= :last_name WHERE emp_no=600000 ";
// $a=array(":first_name" => '길동' , ":last_name" => '홍');
// $st = $obj->prepare($s3);
// $re=$st->execute($a);
// $obj->commit();
// var_dump($re);


// 4. 2에서 등록한 사원을 삭제
// $s4=" DELETE from employees WHERE emp_no=:emp_no";
// $a=array(":emp_no" => "600000");
// $st=$obj->prepare($s4);
// $re=$st->execute($a);
// $obj->commit();
// var_dump($re);
?>