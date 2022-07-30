<?php
     $notas1Bimestre = [
        'ana',
        'joao',
        'marieta',
        'sergio',
    ];

    //adiciona varios elementos ao final do array
    array_push($notas1Bimestre, "joao cleber", "mariazilda", "alequirna");

    var_dump($notas1Bimestre);

    //adiciona o elemento na ultima posição do array
    $notas1Bimestre[] = 'luiz';

    //adiciona o(s) elemento(s) no início do vetor
    array_unshift($notas1Bimestre, 'rafaela');

?>