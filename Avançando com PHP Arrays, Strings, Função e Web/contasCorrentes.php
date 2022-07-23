<?php

    $conta1 = [
        'titular' => 'eu',
        'salario' => 'R$10000'
    ];
    $conta2 = [
        'titular' => 'tu',
        'salario' => 'R$1000'
    ];
    $conta3 = [
        'titular' => 'nos',
        'salario' => 'R$100'
    ];

    $contasCorrentes = [$conta1, $conta2, $conta3];

    for ($i = 0; $i < sizeof($contasCorrentes); $i++) {
        echo $contasCorrentes[$i]['titular'] .PHP_EOL;
    }
?>