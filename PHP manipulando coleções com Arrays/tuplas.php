<?php
    $dados = ['vinicius', 10, 21];
    $dados2 = [
        'nome' => 'eu',
        'nota'=> 10,
    ];

    //cria a variavel e já atribui os valores respectivos do array
    list($nome, $nota, $idade) = $dados;

    //pegas as keys do array e transforma em variaveis com os seus devidos valores
    extract($dados2);   

    //pega varias variaveis e transforma num array, onde o nome da variavel vira a chave, e o valor continua sendo valor
    compact('nome', 'nota', 'idade');

?>