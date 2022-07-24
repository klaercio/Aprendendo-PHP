<?php
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

    function sacar($valor, $conta) {
        $conta['salario'] = $conta['salario'] - $valor;
        return $conta;
    }

    $conta1 = sacar(500, $conta1);

    echo $conta1['salario'];

?>