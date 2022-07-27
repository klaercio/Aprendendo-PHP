<?php
    $array = [1, 2, 3, 4, 5, 6];
    $array2 = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        6000 => 5
    ];

    $variavel = 0;

    $tamanhoArray = count($array);
    $tamanhoArray2 = sizeof($array);

    printf("%d\n", $array[1]);

    readline($variavel);

    foreach ($array as $indice => $value) {
        echo $value;
    }

    for ($i = 0; $i < count($array); $i++) { 
        echo "$array[$i]";
    }
?>