<?php
/*
e.	Реализовать класс Man и Woman наследующие класс People
которые имеют 2 метода jump и walk в каждом их которых будет меняться
положение координат, которые будут в виде публичных свойств.
Так же у наследников People будет свойство gender со значением по умолчанию

*/



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