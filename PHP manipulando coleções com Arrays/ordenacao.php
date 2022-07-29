<?php
    
    $idades = [3, 5, 3, 1, 2, 5, 9];

    var_dump($idades);
    sort($idades);

    foreach ($idades as $key => $value) {
        echo $key . ' - ' . $value .PHP_EOL; 
    }


    $notas = [
        [
            'aluno' => 'maria',
            'nota' => 10,
        ],
        [
            'aluno' => 'joao',
            'nota' => 8,
        ],
        [
            'aluno' => 'ana',
            'nota' => 9,
        ]
    ];

    function ordenaNota(array $nota1, array $nota2): int {
        return $nota2['nota'] <=> $nota1['nota'];
    }

    usort($notas, 'ordenaNota');

    var_dump($notas);

?>