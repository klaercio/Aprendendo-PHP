<?php

    $alunos2021 = [
        'ana',
        'joao',
        'marieta',
        'sergio' 
    ];

    $alunos2022 = [
        'maria',
        'jose',
        'kleverton',
        'joaozim' 
    ];

    //uni dois vetores
    $todosOsAlunos = array_merge($alunos2021, $alunos2022);
    var_dump($todosOsAlunos);

    //spread operator
    $todosOsAlunos2 = [...$alunos2021, ...$alunos2022]; 
    var_dump($todosOsAlunos2);

?>
