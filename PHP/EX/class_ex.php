<?php
    // car_name,car_color
    // method명 : car_make
    // parameter : string $param_name , string $param_color
    // 기능 멤버변수에 값을 셋팅
    // method car_out parmeter 없음 기능 : 자동차이름과 색갈을 출력 (형식 : $color."색".$name)
class Car{
    public $car_name;
    public $car_color;

    // public function car_make($param_name,$param_color){
    //     $re = $param_color."색".$param_color
    //     $re1 = "차이름 : ".$param_name;
    //     $re2 = "색 : ".$param_color;
    //     echo $re;
    //     echo $re1;
    //     echo"\n";
    //     echo $re2;
    // }
    public function car_make($param_name,$param_color){
        $this->car_name = $param_name;
        $this->car_color = $param_color;
    }
    // public function car_out(){
    //     return $this->car_color."색 ".$this->car_name;
    // }

    public function car_out(){
        echo $this->car_color."색 ".$this->car_name;
        // return $this->car_color."색 ".$this->car_name;
    }
}
$ob = new Car;
$ob->car_make("벤츠","하얀");
$ob->car_out();


?>