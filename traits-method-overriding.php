<?php
trait hello{
 private function hi(){
    echo "Hello From Hello Traits. \n";
 }
}
// trait ok{
//  public function hi(){
//     echo "Hello From Ok Traits.\n";
//  }
// }
class base{
    
    use hello{
        hello::hi as public newhi;
    }
    // ok{
    //     ok::hi insteadOf hello; 
    //     hello::hi as honey;
    //     // hello::hi insteadOf ok; 
    // }
}
// class derived extends base{
//     use hello;
//     public function hi(){
//         echo "Hello From derived\n";
//      }
// }
 $t= new base();
$t->newhi();

// $t->honey();





?>