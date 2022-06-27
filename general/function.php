<?php 
    // အေပၚဆံုးမွာ ေၾကညာေပးဖို႔လိုတယ္ 
    declare(strict_types = 1);
    //creating a function 
    // function functionName(parameter,...){
    //     //code to be executed
    // }

    // //calling a function
    // functionName();

    function greeting($username){
        echo "welcome $username! <br>";
    }

    // calling a function 
    greeting("Jack");
    greeting("Tom");
    greeting("Jenny");

    // x and y က type အေနနဲ႕ ဘာမွ မသတ္မွတ္ထားတဲ့အတြက္ ဘာ error မွတက္မွာမဟုတ္ဘူး
    // x and y ကို ဘာတန္ဖိုးပဲ return ျပန္ပါဆိုၿပီးသတ္မွတ္ေပးလို႔၇တယ္။အဲ့တာကို return type hitting လို႔ေခၚတယ္

    function add(int $x,int $y=0) : float{
        return $x+$y;
    }

    // ေအာက္က လိုေ၇းရင္ int ျပန္ေျပာင္းေပးရတယ္
    // function add(float $x,float $y=0) : int{
    //     return (int)($x+$y);
    // }
    // $res = add(3.0,4.0);

    // $res = add(3,4);
    // $res = add(3,"4 days"); //error
    // $res = add(3,4,5); 
    // $res = add(3); // too few arguments error
    // echo $res;

    // $x = 3;
    // $y = 4;
    // echo add($x,$y) . "<br>";

    // __________________________

    // function test($a,...$b){
    //     print_r($b);
    // }

    // test(1,2,3);

    // ___________________________________

    function concatenate($transform,...$strings){
        $string = '';
        foreach ($strings as $word){
            $string .= $word ." ";
        }
        // $a = implode(" ",$strings);
        // echo $string;
       echo $transform($string);
    }

    concatenate("strtoupper","1","want","to","buy",3+2,"apple");

    //for,while,do while,foreach

    $colors = [
        "red",
        "blue",
        "green"
    ];

    foreach($colors as $color){
        echo "$colors <br>";
    };

    $users = [
        "John" => "manager",
        "tom" => "assistant manager",
        "Jenny" => "supervisor"

    ];

    foreach ($user as $name => $role){
        echo "$name => $role  <br>";
    }

?>