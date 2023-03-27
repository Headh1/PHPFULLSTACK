<?php
// $salmon = array("연어초밥","연어샐러드","연어스테이크","연어롤","연어회","연어덮밥");
// echo $salmon[1];

// $m=rand(0,5);
// echo $salmon[$m];

// $sushi =array("연어초밥"=>"연어","새우초밥"=>"새우","참치초밥"=>"참치","광어초밥"=>"광어","타코와사비"=>"낙지");
// echo $sushi["연어초밥"];

// $sushi =array("연어초밥"=>"연어","새우초밥"=>"새우","참치초밥"=>"참치","광어초밥"=>"광어","타코와사비"=>"낙지");
// unset($sushi["연어초밥"]);
// print_r($sushi);

$sushi =array("연어초밥"=>"연어","새우초밥"=>"새우","삭제"=>"값","광어초밥"=>"광어","참치초밥"=>"참치");

foreach ($sushi as $key => $val) {
    if($key=="삭제"){
        unset($sushi[$key]);
    }
    else{
        echo $key." : ".$val."\n";
    }
}

// var_dump($sushi);
// print_r($sushi);
// echo $key." : ".$val."\n";



?>
