<p><b>fibonacci sequence</b></p>
<?php
    $f1 = 0;
    $f2 = 1;
    $n = 30;
    echo $f1;
    echo '<br/>';
    echo $f2,"<br>";
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."<br />"; 
    }
?>