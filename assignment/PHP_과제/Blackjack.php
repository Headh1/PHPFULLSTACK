<?php
// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

// class Start {
//     public $user;
//     public $dealer;
    
//     public function a(){
//     $card_type=array("♠", "♣", "◆", "♥");
//     $card_no=array("A",2,3,4,5,6,7,8,9,10,"J","Q","K");
// }
// }

// $card_type=array("♠", "♣", "◆", "♥");
// $card_no=array("A",2,3,4,5,6,7,8,9,10,"J","Q","K");
// $re= array_slice($card_type,-1);
// $re1= array_rand($card_no);
// $ree=[$re,$re1];
// print_r($ree);

// foreach ($card_type as $v1) {
//     foreach ($card_no as $v2) {
//         $r=$v1.$v2;
//     }
// }

// $this->user = $r;
// $this->dealer = $r;

// class Star{
//     public $user;
//     public $dealer;

//     function card($r,$r2){
//     $card_type=array("♠", "♣", "◆", "♥");
//     $card_no=array("A",2,3,4,5,6,7,8,9,10,"J","Q","K");

//     foreach ($card_type as $v1) {
//             foreach ($card_no as $v2) {
//                 $r=$v1.$v2;
//                 $r2=$v1.$v2;
//             }
//         }

//         $this->user = $r;
//         $this->dealer = $r2;
//     }

//     function vet(){
//         $re=$this->user;
//         $re1=$this->dealer;

//         echo $re." ".$re1;
//     }
//     }

//     $obj = new Star;
//     $obj->vet();

$ar=[];
$card_type=["♠", "♣", "◆", "♥"];
$card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");

// array_values($card_type);
// $r= array_rand($card_type);
// print_r($r);
$r= shuffle($card_type);
$r1= shuffle($card_no);

var_dump($r1);

?>