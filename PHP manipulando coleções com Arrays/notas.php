<?php

    $notas = [10, 5, 2, 5, 9, 5];

    //ordena o vetor
    sort($notas);

    //organiza o vetor em ordem decrescente
    rsort($notas);
    var_dump($notas);

    $notas2 = [
        'ana' => 5,
        'joao' => 9,
        'maria' => 10,
        'jubiclevaldo' => 6
    ];

    //faz o sort porem mantendo a chave;
    asort($notas2);
    var_dump($notas);

    //faz o sort em ordem decrescente mantendo a chave
    arsort($notas2);
    var_dump($notas2);

    //ordena baseado na chave
    ksort($notas2);
    var_dump($notas2);

    //ordena baseado na chave em ordem decrescente
    krsort($notas2); 
    var_dump($notas2);
?>