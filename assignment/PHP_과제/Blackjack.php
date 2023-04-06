<?php
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
//     public $card;
//     public $user;
//     public $dealer;
//     public $card_type=array("♠", "♣", "◆", "♥");
//     public $card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
    // $card_type=array("♠", "♣", "◆", "♥");
    // $card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");

    // public function star(){
    // foreach ($card_type as $v1) {
    //         foreach ($card_no as $v2) {
    //             $card[] =array("shape"=>$v1,"num"=>$v2);
                // $card[] =array($v1,$v2);
    //         }
    //     }
    //     $shu = shuffle($card);
    // return $shu;
    // }
    
    // public function dis(){
    //     $r=array_shift($shu);
    //     print_r($r);
    // }

    // public function vet(){
    //     $re=$this->user;
    //     $re1=$this->dealer;
    //     echo $re."\n".$re1;
    // }
    // }

    // $obj = new Star;
    // $obj->dis();

// $ar=[];
// $card_type=["♠", "♣", "◆", "♥"];
// $card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
// $card_type=["♠", "♣", "◆", "♥"];
// $card_no=array("2"=>2,"3"=>3,"4"=>4,"5"=>5,"6"=>6,"7"=>7,"8"=>8,"9"=>9,"10"=>10,"J"=>10,"Q"=>10,"K"=>10,"A"=>array(1,11));

// array_values($card_type);
// $r= array_rand($card_type);
// print_r($r);
// $r= shuffle($card_type);

// $r1= array_rand($card_no);

// var_dump($r1);

// -------- 여기서 부터 다시 시작
function start($d){
    // $card=array();
// $user=array();
// $dealer=array();
// $u_card=array();
// $d_card=array();
// $card_type=array("♠", "♣", "◆", "♥");
// $card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");

// 1. 카드 배열 만들기
// foreach ($card_type as $v1) {
//             foreach ($card_no as $v2) {
//                 $card[] =array('shape'=>$v1,'num'=>$v2);
//             }
// }
// 2. 한장뽑기
// shuffle($card);
// $user = array_shift($card);
// $dealer = array_shift($card);
}

// 3. kqj10 값을 10으로 주기 , a 값을 1,11줘 값더하기
// function change($ch){
//     foreach($ch as $val){
//         if(in_array($val['num'],array("K","Q","J","10"))){
            
//         }
//     }
// }

// function change($ch){
    // $va = 0;
    // foreach ($ch as $val) {
    //     if ($val['num'] == 'K'||$val['num'] == 'Q'||$val['num'] == 'J') {
    //         $va += 10;
    //     }
    //     else if ($val['num'] == 'A'){
    //         $va += 1;
    //     }
    //     else{
    //         $va = array_sum(array_keys($val));
    //     }
    // }
    // }

// 4. 유저 카드 주기
// function user_card(&$card,$u_card){
//     $user = array_shift($card);
//     array_push($u_card,$user);
//     var_dump($u_card);
// }

// 5. 딜러 카드 주기
// function dealer_card(&$card,$d_card){
//     $dealer = array_shift($card);
//     array_push($d_card,$dealer);
//     var_dump($d_card);
// }

// 6. 출력
// user_card($card,$u_card);
// user_card($card,$u_card);
// dealer_card($card,$d_card);
// dealer_card($card,$d_card);

// 7. 두 카드를 비교하기
// while(true){
//     echo "시작!";
//     if(change($u_card)||change($d_card)>=21){
//         echo "user lost";
//     }
//     else{
//         if(change($u_card)>change($d_card)){
//             echo "user win!🎉";
//             break;
//         }
//         else if(change($u_card)<change($d_card)){
//             echo "user lost!😢";
//             break;
//         }
//         else{echo "user win!🎉";
//         break;}
//     }
//     }

// function gamestart(){

// user_card($card,$u_card);
// user_card($card,$u_card);
// dealer_card($card,$d_card);
// dealer_card($card,$d_card);
// }

// while(true) {
//     echo "시작";
//     echo "\n";
//     echo "게임 시작 : 0";
//     fscanf(STDIN, "%d\n", $input);        
//     if($input === 0) {
//         if(change($u_card)||change($d_card)>=21){
//             echo "user lost";
//         }
//         else{
//             if(change($u_card)>change($d_card)){
//                 echo "user win!🎉";
//                 break;
//             }
//             else if(change($u_card)<change($d_card)){
//                 echo "user lost!😢";
//                 break;
//             }
//             else{echo "user win!🎉";
//                 break;
//             }
//         }
//         echo $input;
//         print "\n";
//     }
//     echo "끝!\n";
// }

?>