<?php
// class Food{
    // private $name;
    // private $price;
    // protected $name;
    // protected $price;

    // public function __construct($p_n,$p_p){
    //     $this->name = $p_n;
    //     $this->price = $p_p;
    // }
    // public function me($p_n,$p_p){
    //     $re=$this->name." : ".$this->price."원\n";
    //     echo $re;
    // }

    // public function new_price($p_p){
    //     $this->price = $p_p;
    // }

//     public function me($p_n,$p_p){
//         $this->name = $p_n;
//         $this->price = $p_p;
//     }

//     public function menu_p(){
//         $re=$this->name." : ".$this->price."원\n";
//         echo $re;
//     }
// }

// $obj = new Food("연어초밥",12000);
// $obj2 = new food("참치초밥",12000);
// $obj->me("연어초밥",12000);
// $obj->me("참치초밥",13000);
// $obj->new_price(10000);
// echo $obj->menu_p();
// echo $obj2->menu_p();

// class Koreafood extends Food{
//     protected $side;
//     protected $sp;

//     public function __construct( $p_n,$p_p,$p_d,$p_s){
//         $this->name = $p_n;
//         $this->price = $p_p;
//         $this->side = $p_d;
//         $this->sp= $p_s;
//     }
//     public function menu_p(){
//         parent::menu_p();
//         $re="사이드 > ".$this->side." : ".$this->sp."원";
//         echo $re;
//     }
// }
// $obj_k= new Koreafood("평양냉면",12000,"만두",5000);
// $obj_k->menu_p();

class People{
    protected $name;

    public function setName($n){
        $this->name = $n;
    }
    public function peoplePrint(){
        $re="이름 : ".$this->name;
        echo $re;
    }
}
class Student extends People{
    protected $id;

    public function setid($i){
        $this->id = $i;
    }
    public function studentprint(){
        parent::peoplePrint();
        $re=" id : ".$this->id;
        echo $re;
    }
}

$obj = new Student;
$obj->setid(1234);
$obj->setName("jina");
$obj-> studentprint();
?>