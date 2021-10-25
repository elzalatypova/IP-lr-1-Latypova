<h3>Латыпова Эльза</h3>
<?php
$N = rand(1, 32500);
$M = rand(1, 32500);
$i = 1;
$j = 1;
echo 'Вариант №6' . '<br>';

echo 'N = ' . $N . '<br>';
echo 'M = ' . $M . '<br>';

if ($M > $N) {
	for ($i=1; $i < floor(pow($M, 1/3)) ; $i++) { 
	 if (pow($i, 3) > $M) {break;}
	  for ($j=1; $j < floor(pow($M, 1/3)); $j++) {
           if (pow($j, 3)  > $M) {break;}
	    for ($s=1; $s < floor(pow($M, 1/3)); $s++) { 
	     if (pow($s, 3) > $M) {break;}
	      $sum = pow($i, 3) + pow($j, 3) + pow($s, 3);
	       if ($sum < $M and $sum > $N) {
		echo $sum , ' ' ;
					 }
				 }	
			}
		 }
} else {
	for ($i=1; $i < floor(pow($N, 1/3)) ; $i++) { 
		if (pow($i, 3) > $N) {break;}
		 for ($j=1; $j < floor(pow($N, 1/3)); $j++) {
		  if (pow($j, 3) > $N) {break;}
		   for ($s=1; $s < floor(pow($N, 1/3)); $s++) { 
		    if (pow($s, 3) > $N) {break;}
		     $sum = pow($i, 3) + pow($j, 3) + pow($s, 3);
		      if ($sum > $M and $sum < $N) {
		       echo $sum , ' ' ;  ;
					 	}
				 	}	
				 }
		 	}
		}
?>
