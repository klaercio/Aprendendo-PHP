<?php
    
    namespace Alura\Banco\Service;

    use Alura\Banco\Modelo\Funcionario\Funcionario;

    class ControladorBonificacoes {
        
        private float $totalBonificacoes = 0;

        public function adicionaBonificacao(Funcionario $funcionario) {
             $this->totalBonificacoes += $funcionario->calculaBonificacao(); 
        }

        public function getTotalBonificacoes(): float{
            return $this->totalBonificacoes;
        }
    }

?>