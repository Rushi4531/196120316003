<?php

    $a = 235;
    $b = 562;
    echo "<h2>Arithmetic Operators</h2>"; 
    
    echo "Addition of $a + $b = ".$a+$b."<br><br>";
    echo "Substraction of $a - $b = ".$a-$b."<br><br>";
    echo "Multiplication of $a * $b = ".$a*$b."<br><br>";
    echo "Divison of $a / 5 = ".$a/5 ."<br><br>";
    echo "Modulo of $a % 5 = ".$a%5 ."<br><br>";
    echo "Exponential of $a ^ $b = ".$a**$b."";

?>
<?php

$x = 10;
$y = 20;
echo "<h2>Comparison Operators</h2>"; 

    echo "$x is Equal to $y : ";
    var_dump($x == $y);
    echo "<br><br>$x is Identical to $y : ";
    var_dump($x === $y);
    echo "<br><br>$x is Not equal to $y : ";
    var_dump($x != $y);
    echo "<br><br>$x is Not identical to $y : ";
    var_dump($x !== $y);
    echo "<br><br>$x is Greater than to $y : ";
    var_dump($x > $y);
    echo "<br><br>$x is Less than to $y : ";
    var_dump($x < $y);
    echo "<br><br>$x is Greater than or equal to $y : ";
    var_dump($x >= $y);
    echo "<br><br>$x is less than or equal to $y : ";
    var_dump($x <= $y);

?>

<?php

    $i = 100;
    $j = 50;
    $k = false;
    echo "<h2>Logical Operators</h2>"; 

    echo "AND operator ($i>$j && $j>$i) : ";
    if($i>$j && $j>$i)
        { echo "True";}
    else
        { echo "False";}
    
    echo "<br><br>OR operator ($i>$j || $i>$j) : ";
    if($i>$j || $i>$j)
        { echo "True";}
    else
        { echo "False";}
    
    echo "<br><br>XOR operator ($i == 100 xor $j == 40) : ";
    if ($i == 100 xor $j == 40) 
        { echo "True"; }
    else
        { echo "False"; }   
    
    echo "<br><br>NOT operator : ";
    if (!$k) 
        { echo "True"; }
    else
        { echo "False"; }

?>
