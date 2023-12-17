<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Examples</title>
    <style>
        h1 {
            color: darkblue;
            background-color: blanchedalmond;
            font-size: large;
            font-weight: bold;
            text-align: center;
        }

        body {
            text-align: center;
            font-size: large;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <?php

    // Example: if else conditions...
    $a = 2;
    $b = 2;

    if (2 == 2) {
        echo $a . "==" . $b . "<h1>This is Equal</h1>";
    }

    // Example: New operator which can give 3 values (1, 0, or -1)
    // If with else condition...
    if (2 <=> 2) {
        echo "equal";
    } else {
        echo "not equal";
    }

    // Example: if else with logical operators...
    if (2 == 2 or 3 == 3) {
        echo "equal";
    }
    if (2 == 2 and 3 == 3) {
        echo "equal";
    } else {
        echo "not equal";
    }

    // Example: Even and odd numbers...
    $a = 10;
    $b = 9;

    if ($a % 2 == 0) {
        echo $a . "<h1>This is Even Number</h1>";
    }

    if ($b % 2 != 0) {
        echo $b . "<h1>This Is Odd Number</h1>";
    } else {
        echo "error";
    }

    // Example: Negative and positive numbers...
    $c = -2;

    if ($c < 0) {
        echo $c . "<h1>This Is Negative </h1>";
    } elseif ($c > 0) {
        echo $c . "<h1>This Is Positive </h1>";
    } else {
        echo "error";
    }

    // Example: Admin login...
    $d = "admin";
    $e = "123";

    if ($d == "admin" and $e == "123") {
        echo $d . "<h1>Welcome Admin</h1>";
    } elseif ($d != "admin" and $e != "123") {
        echo $d . "<h1>Sorry, Try Again</h1>";
    } else {
        echo "error";
    }

    // Example: Percentage condition - calculate percentage of each employee with his age...
    $age = 18;
    $service = "1 years";
    $salary = 30040.67;

    if ($service == "1 years" and $age <= 18) {
        $dis = $salary * 0.10;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 10% Discount</h1>"
            . "<h1>After 10% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } elseif ($service == "2 years" and $age >= 18) {
        $dis = $salary * 0.20;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 20% Discount</h1>"
            . "<h1>After 20% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } elseif ($service == "3 years" and $age >= 19 and $age <= 22) {
        $dis = $salary * 0.30;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 30% Discount</h1>"
            . "<h1>After 30% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } elseif ($service == "4 years" and $age >= 23 and $age <= 30) {
        $dis = $salary * 0.40;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 40% Discount</h1>"
            . "<h1>After 40% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } else {
        echo "<h1>Please Enter Correct Age Value</h1>";
    }

    // Example: Discounts on bus tickets with age...
    $age = 19;
    $location = "Lahore";
    $ticket = 1000;

    if ($age <= 10) {
        $dis = $ticket * 0.75;
        echo "Actual Ticket Price: $ticket | Discount: $dis <h1>Congratulations! You Got 25% Discount on your ticket</h1>"
            . "Now You Will Pay: " . ($ticket - $dis);
    } elseif ($age >= 18) {
        $dis = $ticket * 0.50;
        echo "Actual Ticket Price: $ticket | Discount: $dis <h1>Congratulations! You Got 50% Discount on your ticket</h1>"
            . "Now You Will Pay: " . ($ticket - $dis);
    } elseif ($age >= 25) {
        $dis = $ticket * 0.30;
        echo "Actual Ticket Price: $ticket | Discount: $dis <h1>Congratulations! You Got 30% Discount on your ticket</h1>"
            . "Now You Will Pay: " . ($ticket - $dis);
    } elseif ($age >= 30) {
        $dis = $ticket * 0.40;
        echo "Actual Ticket Price: $ticket | Discount: $dis <h1>Congratulations! You Got 40% Discount on your ticket</h1>"
            . "Now You Will Pay: " . ($ticket - $dis);
    } else {
        echo "<h1>Please Enter Correct Age Value</h1>";
    }

    // Example: Discounts on married and unmarried...
    $age = 17;
    $salary = 10000;
    $relationship = "married";

    if ($age <= 18 and $relationship == "married") {
        $dis = $salary * 0.05;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 5% Discount</h1>"
            . "<h1>After 5% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } elseif ($age >= 18  and $age <= 24 and $relationship == "unmarried") {
        echo "Total Salary: $salary <h1>Sorry, You are unmarried and don't get any discount</h1>";
    } elseif ($age >= 30  and $relationship == "married") {
        $dis = $salary * 0.20;
        echo "Total Salary: $salary | Discount: $dis <h1>Congratulations! You Got 20% Discount</h1>"
            . "<h1>After 20% Added, Now Total Salary is:</h1> " . ($salary + $dis);
    } else {
        echo "<h1>Please Enter Correct Age Value</h1>";
    }

    ?>
</body>

</html>