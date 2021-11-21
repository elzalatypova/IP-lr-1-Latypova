<h3>Латыпова Эльза</h3>
<?php
    echo 'Массив "треугольных" чисел: ';
    $treug = array();
    for ($i = 1; $i < 11; $i++) {
        $treug[] = $i * ($i + 1) / 2;}
    foreach ($treug as $key => $value) {
        echo $value.' ';}
    echo "<br> Массив квадратов натуральных чисел: ";
    $kvd = array();
    for ($i = 1; $i < 11; $i++) {
        $kvd[] = $i * $i;}
    foreach ($kvd as $key => $value) {
        echo $value.' ';}
    echo '<br> Общий массив: ';
    $rez = array_merge($treug, $kvd);
    foreach ($rez as $key => $value) {
        echo $value.' ' ;}
    echo '<br> Отсортированный массив: ';
    sort($rez);
    foreach ($rez as $key => $value) {
        echo $value. ' ';}
    echo '<br> Удаление первого элемента: ';
    unset($rez[0]);
    foreach ($rez as $key => $value) {
        echo $value. ' ';}
    echo '<br> Удаление повторяющихся элементов: ';
    $rez1 = array_unique($rez);
    foreach ($rez1 as $key => $value) {
        echo $value. ' ';}
?>