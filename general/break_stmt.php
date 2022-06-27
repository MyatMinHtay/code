<?php 

        for($i=1; $i <= 5; $i++){
            if($i == 3){
                break;
            }
            
            echo $i . '<br>'; //1 2
        }

        echo "terminate the loop at 3.";

        for($i=1; $i <= 5; $i++){
            if($i == 3){
                //skip the execution
                continue;
            }
            echo $i . '<br>';
        }
?>