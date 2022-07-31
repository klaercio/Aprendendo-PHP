<?php
    require_once './Conta.php';

    $conta = new Conta("123.456.354-10", "João" );

    $conta->depositar(1500);
    $conta->sacar(100);
    $conta->depositar(1500);

    $conta2 = new Conta("105.305.492-16", "Maria");

    $conta->transferir($conta2, 100);

    echo $conta2->getSaldo() .PHP_EOL;

    echo $conta->getSaldo() .PHP_EOL;
?>