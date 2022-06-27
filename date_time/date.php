<?php 

    echo date("l F j, Y",time());

    echo "<br>";

    $month = 9; // September (only has 30 days)
    $day = 31; // 31st
    $year = 2020; // 2020
    if(checkdate($month,$day,$year)){
        echo "Date is valid" . "<br>";
    }else{
        echo "Date is invalid" . "<br>";
    }

    echo "<br>";

    $nextWeek = time() + (7 * 24 * 60 * 60); //7days; 24hours; 60mins; 60secs
    echo "Now :     " . date('Y-m-d') . "<br>";
    echo "Next Week :     " . date('Y-m-d', $nextWeek) . "<br>"; //or using strtotime();
    echo "Next Week :     " . date('Y-m-d', strtotime('+1 week')) . "<br>";

    echo "<br>";

    $d = strtotime("10:30pm April 15 2014");
    echo "Craeted date is " . date("Y-m-d h:i:sa",$d);

    echo "<br>";
    echo "<br>";

    $d = strtotime("tomorrow");
    echo date("Y-m-d", $d) . "<br>";

    $d= strtotime("next Saturday");
    echo date("Y-m-d", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d", $d) . "<br>";










?>