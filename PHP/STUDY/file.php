<?php
$s = fopen("./file/food.txt","r");

// print fgets($s);
// print fgets($s);
// print fgets($s);
// print fgets($s);
// print fgets($s);
// print fgets($s);

// for($a=0; $a<6; $a++){
//     print fgets($s);
// }

// while(($a=fgets($s))!==false){
//     $b=trim($a);
//     echo $b."\n";
// }

// while(!feof($s)){
//     print fgets($s);
// }

// while($line=fgets($s)){
//     print $line;
// }
// $w = fopen("./file/food.txt","w");
$a = fopen("./file/food.txt","a");

fputs($a,"\n사과");
fclose($s);
?>