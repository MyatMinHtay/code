<?php 


    $num = 4;

    // types of array => index(numeric) / associative

    //array declaration
    // $numbers = array(1,2,3,4,5,6,7,8,9,10);

    echo $numbers[4];

    $numbers = [1,2,3,4,5,6,7,8,9,10];

    $user = [
        "name" => "john",
        "age" => 30,
    ]; //associative array

    // echo $user["name"] . "<br/>";

    //echo , print_r(),var_dump() => for printing array


    // print_r($user);
    // print_r($numbers);

    // echo "<br>";
    // var_dump($numbers);

    //adding more elements without using index 
    $numbers[] = 6;
    echo "<br>";
    print_r($number);

    //array destructuring using list()
    $colors = ['red','green','blue'];
    list($c1,$c2,$c3) = $colors;

    //array shmop_read
    // $colors1 = ["red","green","blue","cyan","black"];
    $colors1 = [...$colors,"cyan","black"];
    echo "<br>";
    print_r($colors1);
















?>