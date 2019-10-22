<?php
		$a=array(
				array(1,2,3),
				array(4,5,6),
				array(7,8,9)
				);
		$b=array(
				array(1,0,2),
				array(1,1,3),
				array(3,2,1)
				);
		$c=array();
		
		for($i=0;$i<=2;$i++){
			for($j=0;$j<=2;$j++){ 
			
			$c[$i][$j]=$a[$i][$j]+$b[$i][$j];
			}
		}
		echo"<p>matrix1</p>";
		echo"<pre/>";print_r($a);
		echo"<p>matrix2</p>";
		echo"<pre/>";print_r($b);
		echo"<p>resultant matrix</p>";
		echo"<pre/>";print_r($c);

?>