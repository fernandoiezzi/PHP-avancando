<?php

$conta1 = [
    'titular' => 'Fernando',
    'saldo' => 2500
];

$conta2 = [
    'titular' => 'João',
    'saldo' => 1500
];

$conta3 = [
    'titular' => 'Bruno',
    'saldo' => 6000
];

$conta4 = [
    'titular' => 'Gustavo',
    'saldo' => 2500
];

$conta5 = [
    'titular' => 'Juca',
    'saldo' => 8000
];

$contasCorrente = [$conta1, $conta2, $conta3, $conta4, $conta5];

foreach($contasCorrente as $conta){
    echo $conta['titular'] . PHP_EOL;
} 

// segunda forma
echo PHP_EOL;

$contasCorrente = [
    123456789 => $conta1, 
    252963211 => $conta2, 
    125362997 => $conta3, 
    252987933 => $conta4, 
    252111889 => $conta5];

    foreach ($contasCorrente as $cpf => $conta){
        echo $conta['titular'] . PHP_EOL;
    }  

    //exibindo índices
    echo PHP_EOL;

    foreach ($contasCorrente as $cpf => $conta){
        echo $cpf . PHP_EOL;
    }

    // forma mais organizada

    $contasCorrente = [
        12345678910 => [
            'titular' => 'Pedro',
            'saldo' => 2500
        ],

        2528199320 => [
            'titular' => 'Juca',
            'saldo' => 3066
        ],

        1412122120 => [
            'titular' => 'Pablo',
            'saldo' => 2000
        ]
        ];

        // adicionando itens
        
        $contasCorrente[] = [
            'titular' => 'Lorena',
            'saldo' => 13000
        ];
        
        $contasCorrente[] = [
            'titular' => 'Marlon',
            'saldo' => 60999
        ];

        echo "Segunda coleção." . PHP_EOL;

        foreach ($contasCorrente as $cpf => $conta){
            echo $cpf . ' = ' . $conta['titular'] . PHP_EOL;
        }


