<?php 

    /*
    scope of a variable :
    the boundary within which it can be visible or assessed from code. 
    -local scope 
    -global scope 
    -static scope 

    */

    /*
    local scope :
    A variable declarde within a code block has a LOCAL SCOPE and 
    can only be accessed within that code block.
    That block can be a function, class or any coditional span.


    */

    /*
    global scope :
    Variables in global scope can be accessed from anywhere from 
    outside a function or class independent of its boundary.


    */
    $count = 4;
    $total = 400;

    // function test(){
    //     //local variable
    //     $count = 4;
        
    //     echo $count;
    // }

    // function test(){

    //     global $count;
    //     $count = 5;
    //     $count = 5;
    //     echo $count . "<br>";

    //     echo $GLOBALS['count'] . "<br>";
    // }

    // test();
    // echo "<br>";
    // echo $count;


    /* 
    * superglobals variables => associative array [key,value] 
    * $GLOBALS["count" => 4, "total" => 400];


    /*
        static scope :
        A static variable is again a variable with local scope.
        But it is not destoryed outside the socpe boundary.
    */

    function test(){
        static $count = 0;
        echo $count . "<br>";
        $count++;
    }

    test();

    test();
?>