<?php
for($i = 1; $i < 20; $i++){
    echo $i;
    for($j = 0; $j < $i; $j++){
        echo '-';    
        echo $j;
    }
    echo "<br>"; 
}