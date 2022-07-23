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

    foreach ($contasCorrentes as $conta) {
        echo $conta['titular'] .PHP_EOL;
    }

    foreach ($contasCorrentes as $indice => $conta) {
        echo $indice . $conta['titular'] .PHP_EOL;
    }
?>