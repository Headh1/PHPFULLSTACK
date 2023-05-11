<?php
$user_id = "php506";
$user_pw = "506";

session_name("kim");
session_start();

// 유저 인정작업 필요, 지금은 생략

$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delete";

?>