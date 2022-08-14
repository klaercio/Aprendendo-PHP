<?php

    spl_autoload_register(function (string $nomeCompletodaClasse) {
            $caminhoArquivo = str_replace('Alura\\Banco', '.', $nomeCompletodaClasse);
            $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo) . '.php';
            echo $caminhoArquivo;

            if (file_exists($caminhoArquivo)) {
                require_once $caminhoArquivo;
            }
    });

?>