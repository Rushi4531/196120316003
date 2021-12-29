<?php

    $a1 = array(10,20,30,40,50);
    $a2 = array("Rushi"=>196120316003,"Nayan"=>196120316057,"Darshak"=>196120316026);
    $a3 = array(array(1,2,3),array(4,5,6));

    echo "<h3>Numeric Array</h3>";
    foreach ($a1 as $key) {
        echo $key." ";
    }

    echo "<h3>Associative Array</h3>";
    foreach ($a2 as $key => $value) {
        echo $key." = ".$value."<br>";
    }

    echo "<h3>Multi-Dimensional Array</h3>";
    foreach ($a3 as $key) {
        foreach ($key as $value) {
            echo $value." ";
        }echo "<br>";
    }
?>
