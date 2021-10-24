<h2>Латыпова Эльза</h2>
<HTML>
<BODY>
<TABLE border=1>
<?php
for ($i = 0; $i < 10; $i++) {
    echo '<tr>'; //начало строки таблицы
    for ($k = 1; $k < 11; $k++) {
        echo '<td align=center style="color:'.($k%2?'black':'red').'">'.($i*10+$k).'</td>';
    }
    echo '</tr>'; //конец строки таблицы
}
?>
</TABLE>
</BODY>
</HTML>