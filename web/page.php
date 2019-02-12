<?php
   

    for($i=0;$i<=12;$i++){
        for($x=12;$x>=$i;$x--){
            echo "-";
        }
        for($v=0;$v<=$i*2;$v++){
            echo "*";
        }
        
        echo "</br>";
    }
?>