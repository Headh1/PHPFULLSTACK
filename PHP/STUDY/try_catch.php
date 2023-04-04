<?php
include_once("./db_fncconnect.php");

try {
    $obj=null;
    my_db($obj);

    $s=" SELECT * from employees limit 5";

    $st=$obj->query($s);
    $re=$st->fetchAll();
    
    if(count($re) === 0){
        throw new exception("E99");
    }
    
    
    var_dump($re);
    echo"try\n";
} 
catch ( Exception $e) {
    echo "에러발생\n";
    if($e->getMessage() === "E99"){
        echo "데이터 0건";
    }
    else{
        echo $e->getMessage();
    }
    // echo $e->getMessage();
    echo "\n---에러 발생---\n";
}
finally{
    echo "finally\n";
    $obj=null;
}
echo "end";
?>