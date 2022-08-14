<?php

    namespace Alura\Banco\Modelo\Conta;

    class ContaCorrente extends Conta{

        protected function percentualTarifa(): float{
            return 0.05;
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
    }

    

?>