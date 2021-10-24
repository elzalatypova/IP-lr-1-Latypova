<h3>Латыпова Эльза</h3>
 <p> Число е равно <p>
<?php
 const NUM_E=2.71828;
 $num_el=NUM_E;
 
 echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 
 $num_el= (string) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 $num_el= (int) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 $num_el= (boolean) $num_el;
  echo '$num_el' . ' = ' . $num_el . ' - ' . gettype($num_el) . '<br>';
 
?>
