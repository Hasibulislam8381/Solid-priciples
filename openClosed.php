<?php
 interface shapeInterface {
    public function area():float;
 }
  class circle implements shapeInterface{
    private $r;
    public function __construct($radius){
        $this->r = $radius;
    }
    public function area():float{
        return  pi() * pow($this->r,2);
    }
}

class square implements shapeInterface{
 private $l;
 public function __construct($length){
     $this->l = $length;
 }
 public function area():float{
     return  pow($this->l,2);
 }
}


class AreaCalculator{
 private $shapes;
 public function __construct(shapeInterface ...$shapes){
     $this->shapes = $shapes;
 }
 public function output(){
     foreach($this->shapes as $shape){
          echo $shape->area();
          echo "</br>";
     }
 }
}
class SumCalculator{
    private $shapes;
    public function __construct(shapeInterface ...$shapes){
        $this->shapes = $shapes;
    }
    public function sum(){
        $area = [];
        foreach($this->shapes as $shape){
            $area[] = $shape->area();

        }
        return array_sum($area);
    }

}

$squ = new square(56);
$cir = new circle(12);
$area = new AreaCalculator($squ,$cir);
$sum = new SumCalculator($squ,$cir);
echo $area->output();
echo "The Summation is :" . $sum->sum();


?>