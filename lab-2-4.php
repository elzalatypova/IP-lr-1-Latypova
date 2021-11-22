<h3>Латыпова Эльза</h3>
 <p>Вариант №14</p>
    <?php
    $A = array();
    $N = rand(1, 20);
    $K = 20;
    $min = 20;
for ($i = 0; $i < $N; $i++) {
        $A[] = rand(1,20);}

    echo "</br> Исходный массив:  </br>";
    foreach($A as $value) {
    echo "$value ";}
    for ($i = 0; $i < $N; $i++) {
        if ($A[$i] < $min) {
	    $min =  $A[$i];
        }
    }
    for ($j = 0; $j < $N; $j++) {
        if ($A[$j] > $min) {
            $A[$j] = $min;
        }
    }
 echo "</br> Отсортированный массив: </br>";
    foreach($A as $value) {  
    echo "$value ";}
?>

<p>Вариант №4</p>
    <?php
    $A = array();
    $N = rand(1, 10);
    $K = 0;
for ($i = 0; $i < $N; $i++) {
        $A[] = rand(1,20);}

    echo "</br> Исходный массив:  </br>";
    foreach($A as $value) {
    echo "$value ";}
    for ($i = 0; $i < $N; $i++) {
        if ($A[$i] > 0) {
	    $K =  $K+1;
        }
    }
 echo "</br> Макс-ое число подряд идущих полож-ых эл-ов: $K";
?>
    