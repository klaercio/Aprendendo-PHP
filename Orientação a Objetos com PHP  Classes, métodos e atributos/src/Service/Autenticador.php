<?php

    namespace Alura\Banco\Service;
    use Alura\Banco\Modelo\Funcionario\Diretor;

    class Autenticador {

        public function tentaLogina(Diretor $diretor, string $senha): bool{
            if($diretor->Autenticar($senha)) {
                echo "Usuário logado com sucesso!!";
                return true;
            }

            echo "Senha ou usuário inválido";
            return false;
        }

    }

?>