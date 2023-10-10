<?php 

$carros = [
    'LMS-2539' => [
        'marca' => 'volkswagen',
        'modelo' => 'gol'
    ],

    'KMZ-1456' => [
        'marca' => 'Hyundai',
        'modelo' => 'tucson'
    ],

    'FMZ-5896' => [
        'marca' => 'Chevrolet',
        'modelo' => 'Opala'
    ],

    'PQL-6932' => [
        'marca' => 'Volkswagen',
        'modelo' => 'fusca'
    ]
    ];

    foreach ($carros as $placa => $carro) {
        echo 'Placa: ' . $placa . ' / marca: ' . $carro['marca'] . ' / modelo: ' 
        . $carro['modelo'] . PHP_EOL; 
    }