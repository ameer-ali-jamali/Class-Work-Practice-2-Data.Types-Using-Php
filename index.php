<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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



    // // // Print Functions;
    // // //if else conditions...
    // $a = 2;
    // $b = 2;

    // if (2 == 2) {
    //     echo $a . "==" . $b . "<h1>This is Equal</h1>";
    // }

    // // 2nd if condition......

    // if ($a == $b) :
    //     echo $a == $b;
    // endif;

    // // New oprator whuch can give 3 values 1 or 0 or minus..
    // //If with else condition....

    // if (2 <=> 2) {
    //     echo "equal";
    // } else {
    //     echo "not equal";
    // }

    // //if else with logicall oprators.......

    // if (2 == 2 or 3 == 3) {
    //     echo "equal";
    // }
    // if (2 == 2 and 3 == 3) {
    //     echo "equal";
    // } else {
    //     echo "not equal";
    // }


    // //Even and odd numbers..

    // $a = 10;
    // $b = 9;

    // if ($a % 2 == 0) {
    //     echo $a . "<h1>This is Even Number</h1>";
    // }

    // if ($b % 2 != 0) {
    //     echo $b . "<h1>This Is Odd Number</h1>";
    // } else {
    //     echo "error";
    // }

    // //Negative and posative numbers..

    // $c = -2;

    // if ($c < 0) {
    //     echo $c . "<h1>This Is Negative </h1>";
    // } elseif ($c > 0) {
    //     echo $c . "<h1>This Is Positve </h1>";
    // } else {
    //     echo "error";
    // }

    // //Admin login 

    // $d = "admin";
    // $e = "123";

    // if ($d == "admin" and $e == "123") {
    //     echo $d . "<h1> Wellcome Admin </h1>";
    // } elseif ($d != "admin" and $e != "123") {
    //     echo $d . "<h1>Sorry Try Again </h1>";
    // } else {
    //     echo "error";
    // }


    //Percentage condition function calculate percentage of each employee with his age ....

    // $age = 18;
    // $service = "1 years";
    // $sallery = 30040.67;

    // if ($service == "1 years" and $age <= 18) {
    //     $dis = $sallery * 0.10;
    //     echo "This is total Sallery   = " . " " . $sallery . "  " . "After Discount This is = " . $dis . "<h1>Welldone You Got 10% Discount</h1>"
    //         .
    //         "<h1> After 10% Added Now Total Sallery is </h1>" . " " . $sallery + $dis;
    // } elseif ($service == "2 years" and $age >= 18) {
    //     $dis = $sallery * 0.20;
    //     echo "This is total Sallery   = " . " " . $sallery . "  " . "After Discount This is = " . $dis . "<h1>Welldone You Got 20% Discount</h1>"
    //         .
    //         "<h1> After 20% Added Now Total Sallery is </h1>" . " " . $sallery + $dis;
    // } elseif ($service == "3 years" and $age >= 19 and $age <= 22) {
    //     $dis = $sallery * 0.30;
    //     echo "This is total Sallery  = " . " " . $sallery . "  " . "After Discount This is = " . $dis . "<h1>Welldone You Got 30% Discount</h1>"
    //         .
    //         "<h1> After 30% Added Now Total Sallery is </h1>" . " " . $sallery + $dis;
    // } elseif ($service == "4 years" and $age >= 23 and $age <= 30) {
    //     $dis = $sallery * 0.40;
    //     echo "This is total Sallery  = " . " " . $sallery . " " . "After Discount This is  = " . $dis . "<h1>Welldone You Got 40% Discount</h1>"
    //         .
    //         "<h1> After 40% Added Now Total Sallery is </h1>" . " " . $sallery + $dis;
    // } else {
    //     echo $age . "<h1>Please Enter Correct  Age Value</h1>";
    // }


    // Comdition discounts on bus tickets with age.....

    $age = 19;
    $location = "Lahore";
    $ticket = 1000;

    if ($age <= 10) {
        $dis = $ticket * 0.75;
        echo "This is Actual Ticket Price   = " . " " . $ticket . "  " . "You Got 10% Dicount  = " . $dis . "<h1>Welldone You Got 10% Discount on your ticket</h1>"
            .
            "Now You Will Pay " . " " . $ticket - $dis;
    } elseif ($age >= 18) {
        $dis = $ticket * 0.50;
        echo "This is Actual Ticket Price   = " . " " . $ticket . "  " . "You Got 20% Dicount  = " . $dis . "<h1>Welldone You Got 20% Discount on your ticket</h1>"
            .
            "Now You Will Pay " . " " . $ticket - $dis;
    } elseif ($age >= 25) {
        $dis = $ticket * 0.30;
        echo "This is Actual Ticket Price   = " . " " . $ticket . "  " . "You Got 30% Dicount  = " . $dis . "<h1>Welldone You Got 30% Discount on your ticket</h1>"
            .
            "Now You Will Pay " . " " . $ticket - $dis;
    } elseif ($age >= 30) {
        $dis = $ticket * 0.40;
        echo "This is Actual Ticket Price   = " . " " . $ticket . "  " . "You Got 40% Dicount  = " . $dis . "<h1>Welldone You Got 40% Discount on your ticket</h1>"
            .
            "Now You Will Pay " . " " . $ticket - $dis;
    } else {
        echo $age . "<h1>Please Enter Correct  Age Value</h1>";
    }




    ?>


</body>

</html>