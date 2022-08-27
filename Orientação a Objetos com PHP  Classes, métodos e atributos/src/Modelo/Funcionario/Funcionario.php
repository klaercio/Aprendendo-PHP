<?php

    namespace Alura\Banco\Modelo\Funcionario;
    use Alura\Banco\Modelo\Pessoa;

    abstract class Funcionario extends Pessoa{
        private float $salario;

        public function __construct(string $nome, string $cpf, float $salario){
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }

        public function setNome(string $nome): void {
            $this->validaNomeTitular($nome);
        }

        public function getSalario(): float {
            return $this->salario;
        }

        abstract public function calculaBonificacao(): float;
    }

?>