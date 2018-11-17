<?php  
function starPattern($totalStar)
{
	$genap = 1;
	for ($i=1; $i <= $totalStar; $i++) { 
		for ($k=1; $k <$genap; $k++) { 
			echo "&nbsp;";
		}
		for ($j=$totalStar; $j >$genap; $j--) { 
			echo "*";
		}
		$genap = $genap + 2;
		echo "<br>";
	}
}
starPattern(10)
?> 