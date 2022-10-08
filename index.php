<?php


// // Print Functions;

// //if else conditions...

// $a=2;
// $b=2;

// if(2==2){
// echo"equal";
// }

// // 2nd if condition......

// if($a==$b):
// echo $a==$b;
// endif;

// // New oprator whuch can give 3 values 1 or 0 or minus..
// //If with else condition....

// if(2<=>2){
//     echo"equal";
// }
// else{
//     echo "not equal";
// }

// //if else with logicall oprators.......

// if(2==2 or 3==3){
//     echo"equal";
//     }
// if(2==2 and 3==3){
//     echo"equal";
//     }
// else{
//     echo"not equal";
// }

$a=10;
$b=9;

if($a%2==0){
    echo$a."<h1>This is Even Number</h1>";
}

if($b%2!=0){
    echo$b."<h1>This Is Odd Number</h1>";
    }
else{
echo"error";
}

$c=-2;

if($c<0){
    echo $c."<h1>This Is Negative </h1>";
}
elseif($c>0){
    echo $c."<h1>This Is Positve </h1>";
}
else{
    echo"error";
}

$d="admin";
$e="123";

if($d=="admin" and $e=="123"){
    echo $d."<h1> Wellcome Admin </h1>";
}
elseif($d!="admin" and $e!="123"){
    echo $d."<h1>Sorry Try Again </h1>";
}
else{
    echo"error";
}

$iphone=200000;
$android=100000;
$tech=40000;

?>