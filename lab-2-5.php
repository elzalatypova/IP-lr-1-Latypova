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

echo  "Вариант №14" . '<br>';
$a=1;
$b=rand(1,10);
function f($u, $t) {
    if ( $u < (-2) )
        return ($u * 2);
    elseif ($u <= 2 && $u >= (-2))
        return (sin(pow($u, 3)) + log(abs($t), 10));
    elseif ($u > 2)
        return sqrt(pow(cos($u),2)+pow(sin(pow($t,3)),4),4);
}
$Z=log(f($a,$b),10)+f(pow($a,2),$a+$b);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;
?>


