<?php
trait Tra{
    public function show(){
        echo "Nazir Ansari\n";
    }
    public function cal(){
        echo "Hello Vijay Sir ";
    }
}
trait Hi{
    public function hi(){
        echo "Hello Good Morning Allen Staff";
    }
}
class a{
    use tra;
}
class b{
    use tra,Hi;
    
}
class c{
    use tra;
}
$ta= new a();
$tb= new b();
$tc= new c();
$ta->cal();
echo "<br>";
$tb->show();
echo "<br>";
$tc->show();
echo "<br>";
$tb->hi();




?>