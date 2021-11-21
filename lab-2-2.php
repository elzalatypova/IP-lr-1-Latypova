<h3>Латыпова Эльза</h3>
<?php
    $random_lenth = rand(3, 20);
    $mass = array();
    for ($i = 0; $i < $random_lenth; $i++) {
        $mass[] = rand(10, 99);}
    echo 'Массив из '.$random_lenth.' элементов, заполненный случайными числами: ';
    foreach ($mass as  $value) {
        echo $value.' ';};
    echo '<br> Массив в отсортированном виде: ';
    sort($mass);
    foreach ($mass as  $value) {
        echo $value.' ';};
    echo "<br> Элементы массива в обратном порядке: ";
    $mass = array_reverse($mass);
    foreach ($mass as  $value) {
        echo $value. ' ';};
    echo '<br> Массив после удаления последнего элемента: ';
    array_pop($mass);
    foreach ($mass as  $value) {
        echo $value. ' ';};
    $sumOfMass=array_sum($mass);
    echo '<br> Сумма элементов массива: '. $sumOfMass;
    $countOfMass  = count($mass);
    echo '<br> Количество элементов в массиве: '. $countOfMass;
    $srArif = $sumOfMass / $countOfMass;
    echo '<br> Среднее арифметическое для элементов массива: '. $srArif;
    if (in_array(50, $mass)) {
        echo "<br>Число 50 есть в массиве";} else {
        echo "<br>Числа 50 нет в массиве";}
    echo '<br> Массив их уникальных значений: ';
    $mass = array_unique($mass);
    foreach ($mass as  $value) {
        echo $value. ' ';};
?>