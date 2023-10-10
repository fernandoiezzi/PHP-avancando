<?php
//Informando os tipos de dados e o tipo de dado que se deseja retornar
function depositar(array $conta, float $valorADepositar): array{
    if($valorADepositar < 0){
    exibeMensagem("É aceito somente números positivos!");
    } else {
        $conta['saldo'] += $valorADepositar;
    }

    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem . '<br>';
}


    


//implementando a função de sacar
function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']){
       exibeMensagem("Saldo insuficiente!");
    }else {
       $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

//alterando o valor modificado
function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);

    
}

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}<li>";
}

//O E_NOTICE ocorre quando o PHP encontra algum problema, mas consegue contorná-lo. Por exemplo, se tentarmos acessar e exibir o índice 0 das nossas $contasCorrentes, que não existe, receberemos um PHP Notice. Isso porque o PHP entende que esse índice não existe e devolve um valor nulo (Null).
//O E_WARNING é um aviso de que o PHP não conseguiu realizar alguma instrução, mas continuará a execução do programa. 
//Já o E_ERROR é o PHP informando que ocorreu um problema e não conseguirá continuar com a execução, que é o que queremos que aconteça quando o arquivo incluído (ou requerido) não for encontrado, afinal precisamos das funções para executarmos nossas operações.