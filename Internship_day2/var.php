<?php 

//Variables
//echo 

$a=10;
$b=15;

//method 1 to print values one by one
echo "Value of A:".$a;
echo "<br>Value of B:".$b;

//method 2 single line with .
echo "<br/>Value of A:".$a."<br/>Value of B:".$b;

//method 3
echo "<br/>Value of A $a <br/>Value of B: $b";
//method 4
//it wont print value but only print what is written in quotes 
echo '<br/> value of A is $a <br/>Value of B: $b';

echo "<br/>Value of A $a <br/>Value of B:$b Sum is ($a+$b)";
//method 5
//real sum
echo "<br/>Value of A $a <br/>Value of B:$b Sum is".($a+$b);



echo "<br>";
$c="Sum is ";
echo "$c".($a+$b);

