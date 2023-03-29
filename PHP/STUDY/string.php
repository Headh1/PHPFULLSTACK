<?php
// $str1="a";
// $str2="b";
// $str=$str1.$str2;
// echo $str;

// $str1 = "hELLO world!";
// echo strtolower($str1), "\n";
// echo strtoupper($str1), "\n";
// echo ucfirst($str1), "\n";
// echo ucwords($str1), "\n";
$url="";
$arr_url = parse_url($url);
parse_str($arr_url["query"],$arr_parse);
var_dump($arr_parse);
// $a=rand(0,45);
// $out = array_slice($a, 0, 6);

// echo $out;
?>