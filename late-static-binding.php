<?php
    class base{
            protected static $name = "Farhan";
        public function show(){
            echo static::$name. "<br>";
            echo self::$name;
        }
        }
    class derived extends base {
        protected static $name=  "Nazir";
    }

    $t = new derived();
    $t->show();

















?>