<?php

    spl_autoload_register(function (string $nomeCompletodaClasse) {
        $caminhoArquivo = str_replace('Alura\\Banco', '.', $nomeCompletodaClasse);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo) . '.php';
        echo $caminhoArquivo;

        if (file_exists($caminhoArquivo)) {
            require_once $caminhoArquivo;
        }
    });

    
    use Alura\Banco\Modelo\Conta\{Conta, Titular};
    use Alura\Banco\Modelo\Endereco;
    
    $endereco = new Endereco('Sao paulo', 'zona norte', 'rua das laranjeiras', '523');

    $conta = new Conta(new Titular("123.456.354-10", "João", $endereco));

    $conta->depositar(1500);
    $conta->sacar(100);
    $conta->depositar(1500);

    $conta2 = new Conta(new Titular("105.305.492-16", "Maria", $endereco));

    $conta->transferir($conta2, 100);

    echo $conta2->getSaldo() .PHP_EOL;
    echo $conta->getSaldo() .PHP_EOL;
    echo Conta::getNumeroDeContas() . " Contas" .PHP_EOL;

?>