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
// $url="";
// $arr_url = parse_url($url);
// parse_str($arr_url["query"],$arr_parse);
// var_dump($arr_parse);

// $str = "abcd";
// echo strrev($str), "\n";
// echo substr($str,2), "\n";
// echo mb_substr($str,2);

// $str="안녕하세요. php입니다.";
// echo mb_substr($str,7,7), "\n";
// echo mb_substr($str,-7);
// echo mb_substr($str,3,5), "\n";

// $str = "     ab cd     ";
// echo trim($str), "\n";
// echo rtrim($str), "\n";
// echo ltrim($str), "\n";

// $str = "abcd";
// echo strlen($str);
// $a= 123;

// printf("hello world! %s , %d","hi",$a);

// define("welcome","hi %s!");
// printf(welcome,"jin");

// define("e","error(%d) : %s error가 발생했습니다.\n");
// printf(e,1,"시스템");
// printf(e,2,"로그인");
// printf(e,3,"접속");

// $str = "가나다 50 abcd";
// sscanf($str,"%s %d %s",$k,$d,$en);
// echo $k,"\n",$d,"\n",$en,"\n";

// echo str_repeat("*",4); 

$str = "이름,나이,성별,직업,출생지";
$arr = explode(",",$str);
// print_r($arr);
$im = implode(",",$arr);
echo $im;
?>