<?php

//require ('funcoes.php');

require_once ('funcoes.php') ;
//include ('funcoes.php') 

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
    ],

    2596311478 => [
        'titular' => 'Junqueira',
        'saldo' => 2500
    ],

    2549785636 => [
        'titular' => 'Paulo Azevedo',
        'saldo' => 5000
    ],

    1267896532 => [
        'titular' => 'Maura Assis',
        'saldo' => 4200
    ]
    ];
    

    
    
    $contasCorrente['12345678910'] = sacar($contasCorrente['12345678910'], 500);
    $contasCorrente['2528199320'] = depositar($contasCorrente['2528199320'], 20);
    titularComLetrasMaiusculas($contasCorrente['12345678910']);

    //Para excluir um item do array
    unset($contasCorrente['1412122120']);
    
    echo"<ul>";
    foreach ($contasCorrente as $cpf => $conta){
        //list('titular' => $titular, 'saldo' => $saldo) = $conta;
        //['titular' => $titular, 'saldo' => $saldo] = $conta;
        
        exibeConta($conta);
        //echo exibeMensagem("CPF = $cpf nome = $titular saldo = $saldo");
        //echo exibeMensagem("CPF = $cpf nome = {$conta['titular']} saldo = {$conta['saldo']}");
    }

    echo"</ul>";
    

    //php -S localhost:8000
    // Segunda forma de realiazar saque

    // $contasCorrent['1412122120']['saldo'] = $contasCorrent['1412122120']['saldo'] - 500;

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplicativo banco</title>
    </head>
    <body>
        <h1>Contas corrente</h1>
        <dl>
          <?php foreach ($contasCorrente as $cpf => $conta) { ?> 
          <dt><h3><?= $conta['titular'];?> - <?= $cpf ;?></h3></dt>
          <dd>Saldo: <?= $conta['saldo'];?></dd>
          <?php } ?>
        </dl>
    </body>
    </html>