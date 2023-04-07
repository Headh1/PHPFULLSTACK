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


//     $card=array();
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

// function print_card($all_card){
//     foreach ($all_card as $val) {
//         echo $val['shape'].$val['num'];
//     }
// }

// print_card($card);

// 2. 한장뽑기
// shuffle($card);
// $user = array_shift($card);
// $dealer = array_shift($card);

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

// function print_card($all_card){
//     echo $all_card['$key'];
// }

// print_card($card);
?>

<?php
// 카드 만들어주는 함수

    // $card=array();
    // $user=array();
    // $dealer=array();
    // $u_card=array();
    // $d_card=array();
    // $card_type=array("♠", "♣", "◆", "♥");
    // $card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");

    // foreach ($card_type as $v1) {
    //     foreach ($card_no as $v2) {
    //         $card[] =array('shape'=>$v1,'num'=>$v2);
    //     }
    // }
    // shuffle($card);


// 유저 카드 뽑는 함수
// function user_card(&$card,&$u_card){
//     $user = array_shift($card);
//     array_push($u_card,$user);
    
//     return $u_card;
// }

// 딜러 카드 뽑는 함수
// function dealer_card(&$card,&$d_card){
//     $dealer = array_shift($card);
//     array_push($d_card,$dealer);
    
//     return $d_card;
// }

// kqj는 10 , a는 1 다른건 그대로해서 더해주는 함수
// function change_sum($c_sum){
//     $va = 0;
//     foreach ($c_sum as $val) {
//         if ($val['num'] == 'K'||$val['num'] == 'Q'||$val['num'] == 'J') {
//             $va += 10;
//         }
//         else if ($val['num'] == 'A'){
//             $va += 1;
//         }
//         else{
//             $va += intval($val['num']);
//         }
//     }
//     return $va;
// }

// function change_sum($c_sum){
//     $va = 0;
//     foreach ($c_sum as $val) {
//         if ($val['num'] == 'K'||$val['num'] == 'Q'||$val['num'] == 'J') {
//             $va += 10;
//         }
//         else if ($val['num'] == 'A' && $va < 10){
//             $va += 11;
//         }
//         else if ($val['num'] == 'A' && $va > 10){
//             $va += 1;
//         }
//         else{
//             $va += intval($val['num']);
//         }
//     }
//     return $va;
// }

// 카드를 보여주는 함수
// function print_card($all_card){
//     foreach ($all_card as $val) {
//         echo $val['shape'].$val['num']." ";
//     }
// }

// 게임 시작 함수
// function gamestart(){
// function gamestart(&$card,&$u_card,&$d_card){
    // global $card;
    // global $u_card;
    // global $d_card;
    // $card=array();
    // $u_card = array();
    // $d_card = array();

    // 유저와 딜러에게 카드 주기
    // $u_card=user_card($card,$u_card);
    // $u_card=user_card($card,$u_card);
    // $d_card=dealer_card($card,$d_card);
    // $d_card=dealer_card($card,$d_card);

    // 게임 시작
    // while(true){
    //     echo "\n";
    //     echo "************* 게임 시작! *************";
    //     echo "\n";
    //     echo "유저의 카드 : ";
    //     print_card($u_card);
        // print_r($u_card);
        // print_card($u_card);
        // echo " 합은 : ".change_sum($u_card);
        // change_sum($u_card);
        // echo "\n";
        // echo "1 : 한장 더 , 2 : 결과 , 0 : 게임종료";
        // echo "\n";
        // echo "입력 : ";
        // fscanf(STDIN, "%d\n", $input);
        
        // 딜러의 카드의 합이 17이하면 카드를 한장 더받는다.
        // if(change_sum($d_card)<=17){
        //     $d_card=dealer_card($card,$d_card);
            //딜러의 카드가 21이상이 되면 유저가 이기고 게임이 종료
        //     if(change_sum($d_card)>=21){
        //         echo "유저의 카드 : ";
        //         print_card($u_card);
        //         echo " 합은 : ".change_sum($u_card)."\n";
        //         echo "딜러의 카드 : ";
        //         print_card($d_card);
        //         echo " 합은 : ".change_sum($d_card);
        //         echo "\n";
        //         echo "user win!🎉";
        //         break;
        //     }
        // }
        // 0을 입력했을때 게임이 종료된다.
        // if($input === 0) {
        //     break;
        // }
        // 1을 입력했을때 유저는 카드를 한장 더받는다.
        // else if ($input === 1){
        //     $u_card=user_card($card,$u_card);
            // 유저의 카드와 딜러의 카드 합이 둘다 21이상이 되면 비긴다.
            // if(change_sum($u_card)>=21 && change_sum($d_card)>=21){
            //     echo "유저의 카드 : ";
            //     print_card($u_card);
            //     echo " 합은 : ".change_sum($u_card)."\n";
            //     echo "딜러의 카드 : ";
            //     print_card($d_card);
            //     echo " 합은 : ".change_sum($d_card);
            //     echo "\n";
            //     echo "draw!💥";
            //     break;
            // }
            // else if(change_sum($d_card)>=21){
            //     print_card($u_card);
            //     echo " 합은 : ".change_sum($u_card);
            //     echo "\n";
            //     print_card($d_card);
            //     echo " 합은 : ".change_sum($d_card);
            //     echo "\n";
            //     echo "user win!🎉";
            //     break;
            // }
            // 유저카드의 합이 21이상이 되면 유저가 지고 게임이 종료된다.
        //     else if(change_sum($u_card)>=21){
        //         echo "유저의 카드 : ";
        //         print_card($u_card);
        //         echo " 합은 : ".change_sum($u_card)."\n";
        //         echo "딜러의 카드 : ";
        //         print_card($d_card);
        //         echo " 합은 : ".change_sum($d_card);
        //         echo "\n";
        //         echo "user lost!😢";
        //         break;
        //     }
        // }
        // 2를 입력하면 카드를 비교한다.
        // else if($input === 2){
            // if(change_sum($u_card)>=21){
            //     echo "user lost!😢";
            //     echo "\n";
            //     echo "딜러의 카드 : ";
            //     print_card($d_card);
            //     echo " 합은 : ".change_sum($d_card);
            //     break;
            // }
            // else{
                // 유저 카드의 합이 딜러 카드의 합보다 크면 유저가 이긴다.
                // if(change_sum($u_card)>change_sum($d_card)){
                //     echo "user win!🎉";
                //     echo "\n";
                //     echo "딜러의 카드 : ";
                //     print_card($d_card);
                //     echo " 합은 : ".change_sum($d_card);
                //     break;
                // }
                // 유저 카드의 합이 딜러의 합보다 작으면 유저가 진다.
                // else if(change_sum($u_card)<change_sum($d_card)){
                //     echo "user lost!😢";
                //     echo "\n";
                //     echo "딜러의 카드 : ";
                //     print_card($d_card);
                //     echo " 합은 : ".change_sum($d_card);
                //     break;
                // }
                // 만약 값이 같을경우 비긴다.
                // else{
                //     echo "draw!💥";
                //     echo "\n";
                //     echo "딜러의 카드 : ";
                //     print_card($d_card);
                //     echo " 합은 : ".change_sum($d_card);
                //     break;
                // }
                // 카드 수 비교
                // else{
                //     if(sizeof($u_card)<sizeof($d_card)){
                //         echo "user win!🎉";
                //         echo "\n";
                //         echo "딜러의 카드 : ";
                //         print_card($d_card);
                //         echo " 합은 : ".change_sum($d_card);
                //         break;
                //     }
                //     else if(sizeof($u_card)>sizeof($d_card)){
                //         echo "user lost!😢";
                //         echo "\n";
                //         echo "딜러의 카드 : ";
                //         print_card($d_card);
                //         echo " 합은 : ".change_sum($d_card);
                //         break;
                //     }
                //     else{
                //     echo "draw!💥";
                //     echo "\n";
                //     echo "딜러의 카드 : ";
                //     print_card($d_card);
                //     echo " 합은 : ".change_sum($d_card);
                //     break;
                // }
            // }
//         }
//     }
//     echo "\n************* 게임 종료! ************* \n";
// }

// gamestart();
?>