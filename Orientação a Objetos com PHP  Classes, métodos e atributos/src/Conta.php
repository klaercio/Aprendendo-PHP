<?php

    class Conta {
        private string $cpfTitular;
        private string $nomeTitular;
        private float $saldo;

        public function __construct(string $cpfTitular, string $nomeTitular){
            $this->cpfTitular = $cpfTitular;
            $this->validaNomeTitular($nomeTitular);
            $this->saldo = 0;
        }
        
        public function getCpfTitular(): string {
            return $this->cpfTitular;
        }
        
        public function getNomeTitular(): string {
            return $this->nomeTitular;
        }

        public function getSaldo(): float {
            return $this->saldo;
        }

        public function sacar(float $valor): void {
            if ($valor > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }

            $this->saldo -= $valor;
            echo "Valor sacado com sucesso!!" .PHP_EOL . "Seu novo saldo é $this->saldo" .PHP_EOL;
        }

        public function depositar(float $valor): void {
            if ($valor < 0) {
                echo "O valor a ser depositado precisar ser maior do que 0" .PHP_EOL;
                return;
            }
            
            $this->saldo += $valor;
            echo "Valor depositado com sucesso" .PHP_EOL. "Seu novo saldo é $this->saldo" .PHP_EOL;
        }

        public function transferir(Conta $conta, float $valor): void {
            if ($valor > $this->saldo || $valor < 1) {
                echo "Saldo insificiente, ou o valor para transferência é menor que 1" .PHP_EOL;
                return;
            }

            $this->sacar($valor);
            $conta->depositar($valor);
            echo "valor transferido com sucesso" .PHP_EOL;
        }

        private function validaNomeTitular(string $nomeTitular): void {
            if(strlen($nomeTitular) < 5) {
                echo "O nome tem que ter no mínimo 5 caracteres";
                exit();
            } 
            $this->nomeTitular = $nomeTitular;
        }

    }

?>