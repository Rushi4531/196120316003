<html>
	<head>
		<title>Fibonacci Tabular Format</title>
	</head>
	<body>
		<?php
			echo "<h2>Fibonacci Series In Tabular Format</h2>";
			function Fibonacci($n) {
				$f1 = 0;
				$f2 = 1;
				while($n > 0)
				{
					$f3 = ($f1 + $f2);
					echo "<td>".$f3."</td>";
					$f1 = $f2;
					$f2 = $f3;

					$n--;
				}
			}

			echo "<table><tr><td>0</td><td>1</td>";
			Fibonacci(10);
			echo "</tr></table>";
		?>
	</body>
</html>