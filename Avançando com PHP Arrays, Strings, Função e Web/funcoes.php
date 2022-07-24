<?php

    function sacar(float $valor, array $conta): array{
        $conta['salario'] -= $valor * ($valor <= $conta);
        return $conta;
    }

    function depositar(float $valor, array $conta): array {
        $conta['salario'] += $valor;
        return $conta;
    }

?>