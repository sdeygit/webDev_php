<?php
/*
    Write a short program that prints each number from 1 to 100 on a new line.

    For each multiple of 3, print "Fizz" instead of the number.

    For each multiple of 5, print "Buzz" instead of the number.

    For number which are multiple of both 3 & 5, print "FizzBuzz" instead of the number.
*/

$str1 = "Fizz";
// var_dump($str1);
$str2 = "Buzz";
// $str3 = "FizzBuzz";
$str3 = $str1 . $str2;

for ($i = 1; $i <= 100; $i++){
   if($i % 15 == 0){               // if($i % 3 == 0 && $i % 5 == 0){
        echo $str3 . "<br>";
    }
    elseif ($i % 3 == 0) {
        echo $str1 . "<br>";
    }
    elseif ($i % 5 == 0){
        echo $str2 . "<br>";
    }
    else{
        echo $i . "<br>";
    }   
}

echo "<br>";
echo "<br>";


?>