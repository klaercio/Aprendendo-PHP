<?php

    namespace Modelo;

    class endereco {
        private string $cidade;
        private string $bairro;
        private string $rua;
        private string $numero;

        public function __construct(string $cidade, string $bairro, string $rua, string $numero){
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }

        public function getCidade(): string {
            return $this->cidade;
        }

        public function getBairro(): string {
            return $this->bairro;
        }
        public function getRua() {
            return $this->rua;
        }
        public function getNumero() {
            return $this->numero;
        }

    }

?>