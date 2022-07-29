<?php

    $notas = [10, 9, 5,8,7, 9];

    //verificando se a variável que passei é um array
    if (is_array($notas)) {
        echo "é sim meu patrão" .PHP_EOL;
    };


    //verificando se a variavel que eu passei é um vetor número, 0, 1, 2, 3, ..., n, n+1;
    if (array_is_list($notas)) {
        echo "é sim um array de chaves numéricas" .PHP_EOL;
    }

    //verificando se uma determinada chave existe no arrray
    if (array_key_exists(0, $notas)) {
        echo "Existe sim meu patrão" .PHP_EOL;
    }

    $teste = null;

    //verificando se uma deteminada variavel existe e se é nula
    if (!isset($teste)) {
        echo "Infelizmente, o valor dessa variavel é nulo" .PHP_EOL;
    }

    //verificando se existe alguma chave com valor 10
    if (in_array(10, $notas)) {
        echo "Alguém tirou 10, god god, mas quem foi?" .PHP_EOL;

        //pegando a chave da vetor que tem como valor 10
        $quem = array_search(10, $notas);
        echo "Foia a $quem, god god";
    }


?>