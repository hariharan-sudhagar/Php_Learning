<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // arrays are used to store the colelction of different types of element
    // associative arrays are similar to map in js


    //arrays 
    $tasks = [
        "name", "email", "age", "designation"
    ];
    
    //associative arrays
    $values = [
        "name"  => "hariharan",
        "age"   => "21",
        "email" => "hariharansudhagar18@gmail.com",
        "designation" => "Trainee Software Engineer"
    ];

    //printing all arrays
    // echo var_export($values);
    // $str = json_encode($values);
    // echo $str;
    // print_r($values);

    // // array methods
    // echo count($values);
    // sort($values); // index arrays not associative
    // array_push($values ,"Mango"); //insert in last 

    $test =["hello", "hi", "banana", "grapes"];
    print_r($test);

    array_splice($test , 0, 1, "Apple");
    print_r ($test);






?>

    
</body>
</html>