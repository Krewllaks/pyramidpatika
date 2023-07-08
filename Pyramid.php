<?php

function pyramid($say){
    $a = 0;
        while ($a <= $say) {
            for ($i=0; $i <= $a ; $i++) { 
                echo "0";
            
            }
            $a++;
            echo "<br>";
        }
    
}
pyramid(5);
?>