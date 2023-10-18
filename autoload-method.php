<?php
// require "classes/first.php";
// require "classes/second.php";

function __autoload($class){
require "classes/". $class . ".php";
}

$t = new first();
$t1 = new second();





?>