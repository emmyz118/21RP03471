<?php
$text="RWANDA";

echo "before reverse: <b>",$text,"</b><br><br>";
echo "after reverse: <b>";
for ($i=strlen($text)-1; $i >=0 ; $i--) { 
    echo $text[$i];
}
echo "</b>";

?>