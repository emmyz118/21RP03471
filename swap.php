
<?php
$val1=40;
$val2=67;

echo "before swap: <b>val1 = ",$val1, " and val2 = ",$val2,"</b>";

$tempval=$val2;
$val2=$val1;
$val1=$tempval;

printf("<br><br> after swap: <b>val1 =%d and val2 = %d</b>",$val1,$val2);


?>