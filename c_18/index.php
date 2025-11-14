<?php
    echo "Hello!";
    echo "<br>"; 
    echo "<br>"; 

    echo "Variables :"; 
    echo "<br>"; 

    $a = 10;
    $b = 20;
    $c = $a + $b;

    echo $c;
    echo "<br>";

    echo "The some of a and b = " . $c;     // 30
    echo "<br>";

    echo $a . "<br>" . $b;      // Will give result
    echo "<br>";

    echo $a, $b, $c . "<br>";   // echo can handle multiple arguement at a time before concatenation. echo is first.
    
    // print $a, $b, $c . "<br>";   // print can't handle multiple arguement
    echo "<br>";

    echo "File modified!"
?>