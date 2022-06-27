<?php 
    // m => manger
    // a => assistant manager
    // h => hr

    $emp_type = "m";


    if($emp_type = "m"){
        echo "he is a manager";
    }else if($emp_type = "a"){
        echo "he is assistant manager" ;
    }else{
        echo "he is a hr"; 
    }

    switch($emp_type){
        case 'm':
            echo "manager";
            break;
        case "a":
            echo "assistant manager";
            break;
        case "h":
            echo "hr";
            break;

        default:
            echo "something else";
        
    }
?>