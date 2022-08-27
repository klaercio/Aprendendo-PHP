<?php
    
    require_once 'autoLoad.php';
    
    use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
    use Alura\Banco\Service\ControladorBonificacoes;
    use Alura\Banco\Service\Autenticador;

    $endereco = new Endereco('Sao paulo', 'zona norte', 'rua das laranjeiras', '523');

    $conta = new ContaCorrente(new Titular("123.456.354-10", "João", $endereco));

    $conta->depositar(1500);
    $conta->sacar(100);
    $conta->depositar(1500);

    $conta2 = new ContaPoupanca(new Titular("105.305.492-16", "Maria", $endereco));

    $conta3 = new ContaCorrente(new Titular("123.456.354-10", "João", $endereco));

    $conta3->depositar(500);
    $conta3->sacar(300);
    $conta3->transferir($conta2, 5);

    $funcionario1 = new Gerente('joaozim', '123.445.788-19', 3000);
    $funcionario2 = new Diretor ('maria', '133.435.758-19', 5000);

    $bonificacao = new ControladorBonificacoes;
    $bonificacao->adicionaBonificacao($funcionario1);
    $bonificacao->adicionaBonificacao($funcionario2);

    echo PHP_EOL . $bonificacao->getTotalBonificacoes() . "De bonificação";

    echo PHP_EOL . $conta2->getSaldo() .PHP_EOL;
    echo $conta->getSaldo() .PHP_EOL;
    echo Conta::getNumeroDeContas() . " Contas" .PHP_EOL;

    $autentica = new Autenticador();
    $diretor1 = new Diretor("joaozim", '123.456.223-19', 5000);
    $autentica->tentaLogina($diretor1, '1234');

?>