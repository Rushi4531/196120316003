<?php

    $x = 10;

    echo "Global Variable : $x <br>";

    define("y","100");
    function test(){
        static $z = 15;
        echo "<br>Inside test() function z value is : $z <br>";
        $z++;
    }
    function fun(){
        $x = 20;
        echo"<p>local variable x inside function : $x</p>";
        echo"static variable z inside function, ";
        test();
        echo"constant variable y inside function is : ".y;
    }
    fun();
    echo"<p>global variable x outside function : $x</p>";
    echo"<p>static variable z outside function,</p> ";
    test();
    echo"constant variable y inside function is : ".y;


?>