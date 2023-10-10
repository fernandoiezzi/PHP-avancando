<?php

//exemplos de como criar funções
function olaMundo(){
    echo "Olá mundo";
}

function adiciona2($x){
    return $x + 2;
}

$sete = adiciona2(5);

echo $sete . PHP_EOL ;
olaMundo();
exit();