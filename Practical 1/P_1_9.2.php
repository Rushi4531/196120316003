<html>
    <head></head>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>Enter Num 1 </td>
                    <td> : </td>
                    <td> <input type="text" name="num1"> </td>
                </tr>
                <tr>
                    <td>Enter Num 2 </td>
                    <td> : </td>
                    <td> <input type="text" name="num2"> </td>
                </tr>
                <tr>
                    <td>Enter Num 3 </td>
                    <td> : </td>
                    <td> <input type="text" name="num3"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"/></td>
                    <td></td>
                </tr>
            </table>
        </form>

        <?php
        error_reporting(0);

            function f1 ($a, $b, $c) {
                if($a > $b && $a > $c)
                    echo "<p>The gretest number is : ".$a."</p>";
                elseif($b > $a && $b > $c)
                    echo "<p>The gretest number is : ".$b."</p>";
                else
                    echo "<p>The gretest number is : ".$c."</p>";
            }

            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];
            
            f1($a, $b, $c);    
        ?>

    </body>
</html>