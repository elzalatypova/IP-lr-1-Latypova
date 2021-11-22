<h3>Латыпова Эльза</h3>
<p>Вариант №6</p>
<?php
    function f14($u, $t) {
        if ($u >= 0 && $t >= 0)
            return $u + $t;
        elseif ($u < 0 && $t >= 0)
            return $u * $u + $t;
        elseif ($u >= 0 && $t < 0)
            return ($u - 2 * $t);
        elseif ($u < 0 && $t < 0)
            return ($t + 3 * $u) / ($u * $t);}
    $a = rand(1, 20);
    $b = rand(1, 20);
    $z = f14($a, pow($b, 8) - pow($a, 7)) + f14(pow($a, 10) - pow($b, 11), $b);
    echo "a = $a" . '<br>';
    echo "b = $b" . '<br>';
    echo "z = $z" . '<br>';

?>