<?php
   interface CanWalkInterface{
       public function canWalk();
   }
   interface CanRunInterface{
       public function canRun();
   }
   interface CanFlyInterface{
       public function canFly();
   }
   interface CanSwimInterface{
       public function canSwim();
   }
   class Human implements CanWalkInterface,CanRunInterface{
       public function canWalk(){
         
       }
       public function canRun(){

       }
   }
   class fish implements CanSwimInterface{
      public function canSwim(){

      }
   }
   class Tortoise implements CanSwimInterface,CanWalkInterface{
     public function canSwim(){

     }
     public function canWalk(){

     }
   }
   class Penguin implements CanSwimInterface,CanWalkInterface{
    public function canSwim(){

    }
    public function canWalk(){

    }
   }
?>