<?php
    $count = 1 ;
    $f1 = 0;
    $f2 = 1;
    echo "<h2>Fibonacci series for first 10 numbers :- </h2>";
    echo $f1." ".$f2." ";
    while ($count < 10 )
    {
    $f3 = $f2 + $f1 ;
    echo $f3." ";
    $f1 = $f2 ;
    $f2 = $f3 ;
    $count++;
    }
?>