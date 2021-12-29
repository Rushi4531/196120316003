<?php
    echo "<h2>.....Var Args.....</h2>";

    function vararg(...$a) {
        $max = 0;
        $min = 0;

        $first = func_get_args();
        $max = $first[0];
        $min = $first[0];
                    
        foreach($a as $x) 
        {
            if($x > $max) 
            {
                $max = $x;
            }
        }
        echo "<p>Maximum number from var args is : ".$max."</p>";

        foreach($a as $x) 
        {
            if($x < $min)
            {
                $min = $x;
            }
        }
    echo "<p>Minimum number from var args is : ".$min."</p>";
    }

    echo "<p><b>Passed variable : 10, 30, 45, 5, 3, 25</b></p>";
    vararg(10, 30, 45, 5, 3, 25);
?>