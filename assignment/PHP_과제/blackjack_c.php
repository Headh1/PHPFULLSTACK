<?php
$card=array();
$user=array();
$dealer=array();
$u_card=array();
$d_card=array();
$card_type=array("♠", "♣", "◆", "♥");
$card_no=array("A","2","3","4","5","6","7","8","9","10","J","Q","K");

foreach ($card_type as $v1) {
    foreach ($card_no as $v2) {
        $card[] =array('shape'=>$v1,'num'=>$v2);
    }
}

shuffle($card);

function user_card(&$card,$u_card){
    $user = array_shift($card);
    array_push($u_card,$user);
    var_dump($u_card);
}

function dealer_card(&$card,$d_card){
    $dealer = array_shift($card);
    array_push($d_card,$dealer);
    var_dump($d_card);
}

function change($ch)
{
    $va = 0;
    foreach ($ch as $val) {
        if ($val['num'] == 'K'||$val['num'] == 'Q'||$val['num'] == 'J') {
            $va += 10;
        }
        else if ($val['num'] == 'A'){
            $va += 1;
        }
        else{
            $va = array_sum(array_keys($val));
        }
    }
    }

    user_card($card,$u_card);
    user_card($card,$u_card);
    dealer_card($card,$d_card);
    dealer_card($card,$d_card);

    while(true){
        echo "시작!";
        if((change($u_card)||change($d_card))>=21){
            echo "user lost";
            break;
        }
        else{
            if(change($u_card)>change($d_card)){
                echo "user win!🎉";
                break;
            }
            else if(change($u_card)<change($d_card)){
                echo "user lost!😢";
                break;
            }
            else{
                echo "user win!🎉";
                break;}
        }
        }
?>