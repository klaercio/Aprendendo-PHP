<?php

    namespace Modelo;

    class Pessoa {
        private string $nome;
        private string $cpf;

        public function __construct(string $nome, string $cpf){
            $this->validaNomeTitular($nome);
            $this->cpf = $cpf;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getCpf(): string {
            return $this->cpf;
        }

        protected function validaNomeTitular(string $nomeTitular): void {
            if(strlen($nomeTitular) < 5) {
                echo "O nome tem que ter no mínimo 5 caracteres";
                exit();
            } 
            $this->nomeTitular = $nomeTitular;
        }

    }
?>