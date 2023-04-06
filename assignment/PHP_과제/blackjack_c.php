<?php
// 카드 만들기

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


// 유저 카드 뽑기
function user_card(&$card,&$u_card){
    $user = array_shift($card);
    array_push($u_card,$user);
    
    return $u_card;
}

// 딜러 카드 뽑기
function dealer_card(&$card,&$d_card){
    $dealer = array_shift($card);
    array_push($d_card,$dealer);
    
    return $d_card;
}

// 카드 더하기
function change($ch){
    $va = 0;
    foreach ($ch as $val) {
        if ($val['num'] == 'K'||$val['num'] == 'Q'||$val['num'] == 'J') {
            $va += 10;
        }
        else if ($val['num'] == 'A'){
            $va += 1;
        }
        else{
            $va += intval($val['num']);
        }
    }
    return $va;
}

function gamestart(){
    global $card;
    global $u_card;
    global $d_card;
    $u_card=user_card($card,$u_card);
    $u_card=user_card($card,$u_card);
    $d_card=dealer_card($card,$d_card);
    $d_card=dealer_card($card,$d_card);

    while(true){
        echo "게임 시작!";
        echo "\n";
        echo "유저의 카드 : ";
        print_r($u_card);
        echo "\n";
        echo "1 : 카드 더받기, 2 : 카드비교, 0 : 게임종료";
        echo "\n";
        echo "입력 : ";
        fscanf(STDIN, "%d\n", $input);
        if($input === 0) {
            break;
        }
        else if ($input === 1){
            $u_card=user_card($card,$u_card);
            if(change($u_card)>=21){
                print_r($u_card);
                echo "\n";
                echo "user lost!😢";
                break;
            }
        }
        else if($input === 2){
            if(change($u_card)>=21||change($d_card)>=21){
                echo "user lost!😢";
                echo "\n";
                print_r($d_card);
                break;
            }
            else{
                if(change($u_card)>change($d_card)){
                    echo "user win!🎉";
                    echo "\n";
                    echo "딜러 카드 \n";
                    print_r($d_card);
                    break;
                }
                else if(change($u_card)<change($d_card)){
                    echo "user lost!😢";
                    echo "\n";
                    echo "딜러 카드 \n";
                    print_r($d_card);
                    break;
                }
                else{
                    echo "draw!💥";
                    echo "\n";
                    echo "딜러 카드 \n";
                    print_r($d_card);
                    break;}
                }
        }
    }
}

gamestart();
?>