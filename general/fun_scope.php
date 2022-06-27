<?php 

    // in php functions are global scoper 

    function outer(){

        function inner(){
            echo "inner fun:";
        }
    }

    outer();
    inner();

?>