<?php

$idadeLista = [21, 25, 30, 40, 50, 60, 80];
$nomeLista = array('João', 'Pedro', 'Lucas', 'Guilherme', 'Carlos', 'Fernando', 'Paulo');

for ($i = 0; $i < 7; $i++) {
    echo $idadeLista[$i].PHP_EOL;
}

echo 'Número de itens: ' . count($idadeLista).PHP_EOL;

//segunda forma

for($i=0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}

for ($i = 0; $i < count($nomeLista); $i++) {
    echo $nomeLista[$i] . PHP_EOL;
}