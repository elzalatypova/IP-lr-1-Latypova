<h3>Латыпова Эльза</h3>
<p> Самостоятельная работа №1
<p>
<?php
$a = rand(-20,20);
$c = rand(-20,20);
$d = rand(-20,20);
  echo '$a' . ' = ' . $a . ', $d' . ' = ' . $d . ', $c' . ' = ' . $c . '<br><br>'   ;
echo 'Вариант №4 '. '<br>';

 if ($a==2) {
	echo 'Ошибка - деление на 0!' . '<br><br>';
	}
		 else {
			 echo '('. $c . ' + 4 * ' . $d .' - 12) / (1 - (' . $a . '/ 2)) = ' . ($c+4*$d-12)/(1-($a/2)). '<br><br>';
		 }
 echo 'Вариант №14 '. '<br>';
 if ($c-$a+1==0) {
		echo 'Ошибка - деление на 0!' . '<br><br>';
	}
		else {
			echo '((' . $c . ' / ' . $d . ') + 3 * (' . $a . ' / 2)) / (' . $c . ' - ' . $a . ' + 1) = ' . (($c/$d)+3*($a/2))/($c-$a+1);
		}
?>