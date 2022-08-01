<?php

    namespace Modelo;

    class Funcionario extends Pessoa{
        private string $cargo;


        public function __construct(string $nome, string $cpf, string $cargo){
            parent::__construct($nome, $cpf);
            $this->cargo = $cargo;
        }
        
        public function getCargo(): string {
            return $this->cargo;
        }

        public function setNome(string $nome): void {
            $this->validaNomeTitular($nome);
        }
    }

?>