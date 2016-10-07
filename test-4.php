<?php
    class People {

        public $coordX = 0;
        public $coordY = 0;

        public function jump($coordX, $coordY){
            $coordX += 10;
            $coordY += 10;
            return $coordX . ' :  ' . $coordY;
        }

        public function walk($coordX){
            $coordX += 10;
            return $coordX;
        }
    }

    class Man extends People{

        public static $gender = 'male';

    }


    class Woman extends People{

        public static $gender = 'female';
    }


    $man = new Man();
    echo $man->walk($man->coordX) . PHP_EOL;
    echo $man->jump($man->coordX, $man->coordY);
    echo $man::$gender;

?>