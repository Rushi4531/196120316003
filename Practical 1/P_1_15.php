<?php

  echo "<h2>Arguments</h2>";
        
        function arg($a, $b = 20) {
            $sum = 0;
            echo "<p>Normal passed Argument is : ".$a."</p>";
            echo "<p>Default Argument is : ".$b."</p>";
            
            $sum = $a + $b;
            return $sum;
        }

        function args(...$c) {
            $add = 0;
            echo "<p>Variable length argument</p>";
            foreach($c as $x) {
                echo $x." ";
                $add = $add + $x; 
            }

            return $add;
        }

        $ans = arg(10);
        echo "<p><b>Simple function argument sum by return argument is : ".$ans."</b></p>";
        $ans2 = args(10,20,30,40,50);
        echo "<p><b>Variable length argument sum by return argument is : ".$ans2."</b></p>";

?>