<?php
    
    require_once 'autoLoad.php';
    
    use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
    use Alura\Banco\Modelo\Endereco;
    
    $endereco = new Endereco('Sao paulo', 'zona norte', 'rua das laranjeiras', '523');

    $conta = new Conta(new Titular("123.456.354-10", "João", $endereco));

    $conta->depositar(1500);
    $conta->sacar(100);
    $conta->depositar(1500);

    $conta2 = new Conta(new Titular("105.305.492-16", "Maria", $endereco));

    $conta3 = new ContaCorrente(new Titular("123.456.354-10", "João", $endereco));

    $conta3->depositar(500);
    $conta3->sacar(300);
    $conta3->transferir($conta2, 5);

    echo PHP_EOL . $conta2->getSaldo() .PHP_EOL;
    echo $conta->getSaldo() .PHP_EOL;
    echo Conta::getNumeroDeContas() . " Contas" .PHP_EOL;

?>