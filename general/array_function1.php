<?php 

    $colors = ["red","green","blue","purple","black","white"];

    // $replacement = ["cyan","magenta","yellow"];

    //print_r (array_slice($colors,2,3)); // shift+alt + ^ up arraw copy up 
    //print_r(array_slice($colors,-3,3));

    // $result = array_splice($colors,2,3,$replacement);
    // print_r($result);

    // echo "<br>";
    // print_r($colors);

    // $user = [
    //     "name" => "John",
    //     "age" => 30,
    //     "role" => "manager",
    // ];

    $user = [
        "John" => 30,
        "Jack" => 23,
        "Tom" => 45,
    ];

    // sort() => sort by value, rsort() => reverse sort by value 
    // sort($user);
    // rsort($user);
    // print_r($user);


    // echo nl2br('\n'); //break line like (<br>)
    // print_r(array_values($user));


    // ksort() => sort by index / key, krsort() => reverse sort by index / key 
    // ksort($user);
    // print_r($user);
    // echo nl2br('\n');
    // krsort($user);
    // print_r($user);

     $a = implode(" ",$colors);
     echo $a . "<br>";

    print_r(explode(" ",$a));




?>