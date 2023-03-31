<?php
// class Student{
//     public $std_name;
//     private $std_id;
//     protected $std_age;

//     public function print_student($p,$s){
//         $re1 = "이름 : ".$p;
//         $re2 = "나이 : ".$s."세";
//         echo $re1;
//         echo"\n";
//         echo $re2;
//     }
//     public function set($p){
//         $this->std_id = $p;
//     }
    
//     public function get(){
//         return $this->std_id;
//     }
// }

// $ob = new Student; 
// $ob->set("ddd");
// echo $ob->get();

// $ob->print_student("aaa","20");
// echo "\n";
// echo $ob->std_name = "bbb";

// $ob->std_id = "ccc";
// $ob->std_age= "ddd";

class Food{
    private $name;

    public function __construct($food_name){
        $this->name = $food_name;
    }

    public function print(){
        echo $this->name;
    }
} 

$ob=new Food("연어샐러드");
$ob->print();
?>