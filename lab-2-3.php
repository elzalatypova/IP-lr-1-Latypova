<h3>Латыпова Эльза</h3>
<?php
echo 'Ассоциативный массив с ключами и значениями: ';
    $cust = array(
        "cnum" => "2001","cname" => "Hoffman","city" => "London","snum" => "1001");  
  var_export($cust);
    echo'<br> Добавление ключа rating со значением "100": ';
    $cust["rating"] = 100;
    var_export($cust);
    echo '<br> Сортировка по значениям: ';
    asort($cust);
    var_export($cust);
    echo '<br> Сортировка по ключам: ';
    ksort($cust);
    var_export($cust);
    echo '<br> Сортировка с помощью  функции sort(): <br>';
    sort($cust);
    var_export($cust);
?>
