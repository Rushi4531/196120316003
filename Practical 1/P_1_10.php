<?php
    $x=10;
    $y=20;
    $p=30;
    $q=40;

    function callByValue($a,$b){
        $a=5;
        $b=7;
        $c=$a+$b;
        echo"<p>Inside function,</br>sum of $a and $b in call by value is : $c</p>";
    }

    function callByReference($a,&$b){
        $c=$a+$b;
        $a=10;
        $b=20;
        echo"<p>Inside function,</br>sum of $a and $b in call by reference is : $c</p>";
    }
    callByValue($x,$y);
    echo"<p>Outside function x is : $x and y is : $y</p>";
    callByReference($p,$q);
    echo"<p>Outside function p is : $p and q is : $q</p>";
?>