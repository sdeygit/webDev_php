<?php

    echo "Indexed Array :";

    echo "<br>";
    echo "<br>";

    $customer_name = array("Abc","Defxy","Ghiw","Jklpqr","Mno");

    // var_dump($customer_name);
    // var_dump($customer_name[2]);

    // echo $customer_name[2];

    echo "Showing array elements using for loop :" . "<br>";
    for($i=0; $i < count($customer_name); $i++){
        echo $customer_name[$i] . "<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "Showing array elements using while loop :" . "<br>";
    $j = 0;
    while($j < count($customer_name)){
        echo $customer_name[$j] . "<br>";
        $j++;
    }

    echo "<br>";

    echo "Associative Array :";

    echo "<br>";
    echo "<br>";

    $price = array("Shirt" => "1000", "Pant" => "1500", "Panjabi" => "2500");

    echo $price['Shirt'] . "<br>";
    echo $price['Pant'] . "<br>";
    echo $price['Panjabi'] . "<br>";

    echo "<br>";

    foreach($price as $p => $value){
        // echo $p . "<br>";
        echo $p  . ' : ' . $value . "<br>";
    }
?>