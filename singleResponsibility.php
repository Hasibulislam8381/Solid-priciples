<?php
   class circle{
       private $r;
       public function setRadius($radius){
           $this->r = $radius;
       }
       public function getArea(){
           return "Area of circle is :". pi() * pow($this->r,2);
       }
   }

   class square{
    private $l;
    public function setLength($length){
        $this->l = $length;
    }
    public function getArea(){
        return "Area of square is :".  pow($this->l,2);
    }
}


class AreaCalculator{
    private $shapes;
    public function __construct(...$shapes){
        $this->shapes = $shapes;
    }
    public function output(){
        foreach($this->shapes as $shape){
             echo $shape->getArea();
             echo "</br>";
        }
    }
 }

 $cir = new circle();
 $squ = new square();
 $cir->setRadius(23);
 $squ->setLength(21);
 $area = new  AreaCalculator($cir,$squ);
 $area->output();

 

?>