<?php
    
    $idades = [3, 5, 3, 1, 2, 5, 9];

    var_dump($idades);
    sort($idades);

    foreach ($idades as $key => $value) {
        echo $key . ' - ' . $value .PHP_EOL; 
    }

?>