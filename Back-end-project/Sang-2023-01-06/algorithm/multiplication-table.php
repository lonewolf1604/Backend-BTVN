<?php
for ((int)$i = 1; $i <=10; $i++){
    echo '<div class="multiplication__item">';
    for ((int) $j = 1; $j <= 10; $j++) {
        echo $i. ' x ' .$j. ' = ' .$i*$j;
        echo '<br>';
    }
    echo '</div>';
}