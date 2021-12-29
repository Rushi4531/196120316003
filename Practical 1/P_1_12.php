<?php 

    $a = array(array(2,3),array(5,6));
    $b = array(array(7,3),array(4,2));
    
    
    echo "<h2>Addition of two Matrix</h2>";
    
    for($i = 0; $i < 2; $i++)
    {
        for($j = 0; $j < 2; $j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "<h2>Multiplication of two Matrix</h2>";
    for($i = 0; $i < 2; $i++)
    {
        for($j = 0; $j < 2; $j++)
        {
            $mul[$i][$j] = 0;
            for ($k=0; $k < count($a[$i]); $k++) { 
                $mul[$i][$j] += $a[$i][$k]*$b[$k][$j];
            }
        }
    }
    for ($i = 0; $i < 2; $i++) 
{ 
    for ($j = 0; $j < 2; $j++) 
    { 
        echo $mul[$i][$j]." "; 
    } 
    echo "<br>"; 
} 
?>