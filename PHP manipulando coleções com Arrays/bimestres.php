<?php
    
    $notas1Bimestre = [
        'ana' => 10,
        'joao' => 9,
        'marieta' => 7,
        'sergio' => 8,
    ];
    
    $notas2Bimestre = [
        'ana' => 9,
        'joao' => 9,
        'marieta' => 8,
    ];

    //vai retornar todos os valores que estão no primeiro vetor que não estão no segundo
    var_dump(array_diff($notas1Bimestre, $notas2Bimestre));

    //vai retornar todos os valores de chave que estão no primeiro vetor que não estão no segundo
    var_dump(array_diff_key($notas1Bimestre, $notas2Bimestre));

    //vai retornar todos os valores que estão no primeiro vetor e não estão no segundo, levando em consideração tanto a chave quanto o valor
    var_dump(array_diff_assoc($notas1Bimestre, $notas2Bimestre)); 

    $alunosFaltantes = array_diff_key($notas1Bimestre, $notas2Bimestre);

    //pegar as chaves do vetor e coloca um um array
    var_dump(array_keys($alunosFaltantes));

    //pegar os valores de um array
    var_dump(array_values($alunosFaltantes));

    //combina 2 vetores, sendo o primeiro vetor a chave e o segundo os valores das determinadas chaves
    var_dump(array_combine(array_values($alunosFaltantes), array_keys($alunosFaltantes)));

    //inverte chave com valor
    var_dump(array_flip($notas1Bimestre));
?>