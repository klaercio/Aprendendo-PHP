<?php 
    
    namespace Alura\Banco\Modelo\Conta;

    class ContaPoupanca extends Conta{
        
        public function sacar(float $valor): void {

            $tarifaSaque = $valor * 0.03;
            $valorSaque = $valor + $tarifaSaque;

            if ($valorSaque > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }

            $this->saldo -= $valorSaque;
            echo "Valor sacado com sucesso!!" .PHP_EOL . "Seu novo saldo é $this->saldo" .PHP_EOL;
        }
    }


?>