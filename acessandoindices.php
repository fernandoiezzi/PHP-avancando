<?php

$contasCorrente = [
    12345696310 => [
        'titular' => 'Maria',
        'saldo' => 169178
    ],
    
    5252362236 => [
        'titular' => 'Juca',
        'saldo' => 1000
    ],

    2523232326 => [
        'titular' => 'Pablo',
        'saldo' => 1500
    ]
];

echo $contasCorrente[5252362236]['titular'] . PHP_EOL;
echo PHP_EOL;

//adicionando novos itens

$contasCorrente[2526987777] = [
    'titular' => 'Barruan',
    'saldo' => 25600
];

$contasCorrente[5588889996] = [
    'titular' => 'Lucas',
    'saldo' => 150036
];

$contasCorrente[2546789569] = [
    'titular' => 'Kelly',
    'saldo' => 40000
];


foreach ($contasCorrente as $conta){
    echo 'Nome: ' . $conta['titular']. ', Saldo: '. $conta['saldo'] . PHP_EOL;
}

//lista comum

$idadeList = [10, 20, 31, 45, 50, 68];

// adicionando item

$idadeList[count($idadeList)] = 100;
$idadeList[] = 150;

foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
}