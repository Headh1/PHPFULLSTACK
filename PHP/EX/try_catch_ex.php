<?php

include_once("../STUDY/db_fncconnect.php");

$s1=" SELECT * from department";
$s2=" SELECT * from dept_manager";
$s3=" SELECT * from titles_2";

function t_c_f($ss){
    try{
        $obj=null;
        my_db($obj);
        $st=$obj->query($ss);
        $re=$st->fetchAll();
        
        if(count($re) === 0){
            throw new Exception("error");
            // echo "\n 데이터가 없음";
        }
        else{
            echo "\n정상종료";
    }
    }
    catch(Exception $t){
        if($t->getMessage() === "error"){
            echo "\n데이터가 없음";
        }
        else{
        echo $t->getMessage();
    }
    }
    finally{
        $obj=null;
    }
}
t_c_f($s1);
t_c_f($s2);
t_c_f($s3);


// try {
//     $obj=null;
//     my_db($obj);

//     $s1=" SELECT * from department";
//     $st= $obj->query($s1);
//     $re= $st->fetchAll();

//     // $s2=" SELECT * from dept_manager";
//     // $st1= $obj->query($s2);
//     // $re2= $st1->fetchAll();
    
//     if(count($re) === 0){
//         throw new Exception("a");
//     }
//     else{
//         var_dump($re);
//         echo "정상종료\n";
//     }
// } 
// catch ( Exception $t) {
//     // echo "-------에러 발생-------- \n";
//     // if($t->getMessage() === "a"){

//     // }
//     // else{
//     //     echo $t->getMessage();
//     // }
//     // echo "\n-------에러 발생-------- \n";
//     echo $t->getMessage();
// }
// finally{
//     echo "종료\n";
//     $obj=null;
// }

?>