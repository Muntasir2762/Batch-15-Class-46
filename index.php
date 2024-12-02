
<?php

    Class Car {

        public function color (){
            echo 'red';
        }

        public function engine (){
            echo '4000cc';
        }

        public function model (){
            echo 'B152024';
        }
    }


   $objectCar = new Car(); //Object

   $objectCar->color ();
   echo '<br>';
   $objectCar->model ();
   echo '<br>';
   $objectCar->engine();
   echo '<br>';



   Class Calculator {

    public function sum ($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x+$y;

        return $result;
    }

    public function sub ($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x-$y;

        return $result;
    }

   }

   $objectCalculator = new Calculator();

   echo "Calculator Class <br>";
   echo $objectCalculator->sum (60, 70);
   echo '<br>';
   echo $objectCalculator->sub(20, 30);
   echo '<br>';
   echo $objectCalculator->sum (120, 70);

?>