<?php
// var_dump($_GET);

$post_get = $_GET;
// echo $post_get["id"];
foreach ($post_get as $key => $val) {
    echo $key." : ".$val,"\n";
}
?>