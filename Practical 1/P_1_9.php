<?php

echo "enter num 1 : ";
$a = fgets(STDIN);
echo "enter num 2 : ";
$b = fgets(STDIN);
echo "enter num 3 : ";
$c = fgets(STDIN);

if($a>$b && $a>$c)
{
    echo "The gratest number is $a";
}
else if($b>$c && $b>$c)
{
    echo "The gratest number is $b";
}
else
{
    echo "The gratest number is $c";
}

?>