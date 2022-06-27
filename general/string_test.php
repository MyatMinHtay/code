<?php 

    $str = "Hello world";
    // $str = 'this tower is 100\' high.';

    echo $str;

    //1. strlen()

    // echo strlen($str);

    //2. str_replace(string_to_be_replace,replacement string,origan string)
    //Hello world => Hello All
    // echo  str_replace("world","All","hellow world");

    //3. substr(original_strinig,start_index,number_of_chars)
    //the best is yet to come 
    // substr("the best is yet to come",0,8);


    //4. strpos(original_string,sub_string)
    // echo strpos("impossible","possible");
    // echo strpos("impossible","something else");

    //5. strtolower(original_lowercase)
    // echo strtolower("Hello");

    //6. strrev(original_string)
    //  echo strrev("stressed");

    //7. str_word_count(original_string) //, : . ; ?
    // str_word_count("enjoy the little things");

    //8. explode(separator,original_string) => used to convert strings iinto an array variable.
    //   $arr = explode(" ","the purpose fuels passion.");
    //   print_r($arr);

    // 9. trim(original_string,char_list),rtrim()//right trim,ltrim() //left trim 
    // (string တစ္ေၾကာင္းရဲ႕ မလိုအပ္တဲ့ space ေတြ char ေတြကို ျဖတ္တာ)
    // echo trim("awares","as");



?>  