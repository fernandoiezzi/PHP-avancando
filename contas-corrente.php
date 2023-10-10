<?php

$conta1 = [
    12345678910 => 'Vinicius',
    'titular'=> 'Vinicius',
    'saldo'=> 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => '2500'
];

$conta3 = [
    'titular' => 'João',
    'saldo' => 1500
];

$conta4 = [
    'titular' => 'Marcos',
    'saldo' => 4000
];

$conta5 = [
    'titular' => 'Paulo',
    'saldo' => 3000
];

$contasCorrente = [$conta1,$conta2,$conta3,$conta4,$conta5];

//exibindo nome do titular

echo "Saldo: $conta1[saldo]". PHP_EOL;
echo $conta1['saldo']. PHP_EOL;

//exibindo o nome pelo número de cpf

echo "CPF: $conta1[12345678910]" . PHP_EOL;
echo PHP_EOL;
//exibindo o titular de cada conta

for ($i = 0; $i < count($contasCorrente); $i++ ){
    echo $contasCorrente[$i]['titular'] . PHP_EOL;
}
