<?php

function Factorial($n)
{
    if($n <= 1)
    {
        return true;
    }
    else
    {
        return $n * Factorial($n - 1);
    }
}

$a = 8;
echo "Factorial of $a is : ".Factorial($a);

?>