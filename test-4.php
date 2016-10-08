<?php
/*
e.	Реализовать класс Man и Woman наследующие класс People
которые имеют 2 метода jump и walk в каждом их которых будет меняться
положение координат, которые будут в виде публичных свойств.
Так же у наследников People будет свойство gender со значением по умолчанию

*/

    class People {
        CONST GENDER_MALE   = 1;
        CONST GENDER_FEMALE = 2;

        public $coordX = 0;
        public $coordY = 0;
        public $gender = self::GENDER_MALE;

        public function jump(){
            //Не надо в метод ничего передавать, прыжок и ходьба - без прараметров,
            //Так же САМОЕ ГЛАВНОЕ - ты должен менять значения в текущем классе, а у тебя это сейчас просто как функция работала
            $this->coordX += 10;
            $this->coordY += 10;
        }

        public function walk(){
            $this->coordX += 10;
        }
    }

    class Man extends People{
        //Нет нужды в статичном свойстве
        public $gender = People::GENDER_MALE;
    }


    class Woman extends People{
        public $gender = People::GENDER_FEMALE;
    }

    $man = new Man();
    $man->walk();
    $man->walk();
    $man->walk();
    echo($man->coordX);

//Не обязательно писать закрывающий тег - и никто уже его не пишет