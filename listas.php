<?php
 $idadelista = array(21, 25, 35, 40, 45, 50, 60);
 $idadelista2 = [21, 33, 50, 60, 87, 21];

 //acessando o primeiro dado do array

 $primeiraIdade = $idadelista[0];

 //acessando o quinto dado do array

 $terceiraIdade = $idadelista2[4];

 //excluindo um item
 unset($idadelista2[2]);

 echo "A primeira idade é $primeiraIdade" .PHP_EOL;

 echo "Exibindo a quinta posição da segunda lista $terceiraIdade";


