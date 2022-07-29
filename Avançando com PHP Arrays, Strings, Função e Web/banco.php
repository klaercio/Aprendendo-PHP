<?php

require_once 'funcoes.php';

    $conta1 = [
        'titular' => 'eu',
        'salario' => 10000
    ];
    $conta2 = [
        'titular' => 'tu',
        'salario' => 1000
    ];
    $conta3 = [
        'titular' => 'nos',
        'salario' => 100
    ];

    $contasCorrentes = [$conta1, $conta2, $conta3];

    $conta1 = sacar(500, $conta1);

    echo $conta1['salario'];

    function toLetraMaiscula(&$conta){
        ['titular' => $titular, 'salario' => $salario] = $conta;
        $conta['titular'] = mb_strtoupper($conta['titular']);
        echo "$titular $salario";
    }

    unset($contasCorrentes[0]);

    toLetraMaiscula($conta2);

    echo $conta2['titular'];


?>