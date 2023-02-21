
<P>equilateral triangle</P>
<?php
    //rhombus

    $xy=10;

    for ($i=1; $i <=$xy ; $i++) { 

        ?>
        <div style="margin-top:-10px">
        <?php

        for ($j=1; $j <=$xy ; $j++) { 
            if ($j<=($xy-$i)) {
                echo "&nbsp";
            }
            else {
            
                    echo "*";
              
                    

                
                
            }
        }
        ?>
        </div>
        <?php
    }

?>
    