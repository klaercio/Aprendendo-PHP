<?php

    namespace Alura\Banco\Modelo\Conta;
    use Alura\Banco\Modelo\{Pessoa, Endereco};

    class Titular extends Pessoa{
        private Endereco $endereco;

        public function __construct(string $cpf, string $nome, Endereco $endereco){
          
            parent::__construct($nome, $cpf);
            /*
            $this->cpf = $cpf;
            $this->validaNomeTitular($nome); 
            */
            $this->endereco = $endereco;
        }

        public function getEndereco(): Endereco {
            return $this->endereco;
        }
    }
?>