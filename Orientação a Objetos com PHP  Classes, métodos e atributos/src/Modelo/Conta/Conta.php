<?php

    namespace Alura\Banco\Modelo\Conta;

    class Conta{
        private $titular;
        private float $saldo;
        private static int $numeroDeContas = 0;

        public function __construct(Titular $titular) {
            $this->titular = $titular;
            $this->saldo = 0;
            self::$numeroDeContas++;
        }
        
        public function __destruct() {
            self::$numeroDeContas--;
        }

        public function getNomeTitular(): string {
            return $this->titular->getNome();
        }

        public function getCpfTitular(): string {
            return $this->titular->getCpf();
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

        public static function getNumeroDeContas(): int {
            return self::$numeroDeContas;
        }

    }

?>