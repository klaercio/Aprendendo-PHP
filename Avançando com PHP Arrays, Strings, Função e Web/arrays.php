<?php

    $idade = [1, 2, 3, 4, 5, 6, 7, 8];

    array_push($idade, ...[1, 3, 4]);

    for ($i = 0; $i < sizeof($idade); $i++) {
        echo $idade[$i] .PHP_EOL;
    }
?>