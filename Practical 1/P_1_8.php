<?php

    echo "<h2>While Loop</h2>";

    $i=0;
    while($i<=10)
    {
        echo $i;
        echo "<br>";
        $i++;
    }
?>

<?php
    echo "<h2>Do..While Loop</h2>";
    $i = 0;
    do{
        echo $i;
        echo "<br>";
        $i++;
    }while ($i <= 10);

?>

<?php
    echo "<h2>For Loop</h2>";
    $i=0;
    for ($i=0; $i <= 10; $i++) 
    { 
        echo $i;
        echo "<br>";
    }

?>

<?php
    echo "<h2>For Each Loop</h2>";
    $arr = array("Banana","Apple","Bread","Butter");
    foreach ($arr as $a) {
        echo "$a <br>";
    }

?>


