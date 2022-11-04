<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // PHP DataTypes
    // Data type specifies the type of value a variable requires to do various operations without causing an error. By default, PHP provides the following built-in data types:

    // String
    // Integer
    // Float
    // Boolean
    // Array
    // NULL

    //   1. String
    // A string is a sequence of characters that holds letters and numbers. It can be anything written inside single or double quotes. 

    //For Example:

    $x = "Hello world!";
    echo $x;


    // 2. Integer
    // An integer is a non-decimal number typically ranging between  -2,147,483,648 and 2,147,483,647. 

    $x = 55;
    var_dump($x);


    // 3. Float
    //A float is a number with a decimal point. It can be an exponential number or a fraction.

    $x = 52.55;
    var_dump($x);


    // 4. Boolean
    // A Boolean represents two values: True or False. 

    $x = true;
    $y = false;


    // 5. Array
    // Array is a collection of similar data elements stored in a single variable.

    $h = array('Rohan', 'Lovish');
    var_dump($h);


    // 6. NULL
    // Null is a special data type with only one value which is NULL. In PHP, if a variable is created without passing a value, it will automatically assign itself a value of NULL.

    $x = null;












    ?>

</body>

</html>