<?php
abstract class animal{
    protected $legs;
    abstract public function legs($legs);
    public function getLegs(){
        return $this->legs;
    }
}
class Dog extends animal{
    public function legs($legs){
        $this->legs = $legs;

    }
}
class Human extends animal{
    public function legs($legs){
        $this->legs = $legs;
    }
}

class Printout{
    private $animals;
    public function __construct(animal ...$animals){
        $this->animals = $animals;
    }
    public function output(){
        foreach($this->animals as $animal){
            echo "The " . get_class($animal) . " has " . $animal->getLegs() . " legs" ."<br>";
        }
      
    }
}
$human = new Human();
$dog = new Dog();
$human->legs(2);
$dog->legs(4);
$printout = new Printout($human,$dog);
$printout->output();
?>