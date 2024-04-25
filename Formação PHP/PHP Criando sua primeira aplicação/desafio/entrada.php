<?php

$conta = [
    "titular" => "Lucas Ribeiro",
    "saldo" => 0.0
];

do {

    
    echo "*******\n";
    echo "Titular: " . $conta['titular'];
    echo "\n";
    echo "Saldo: " . $conta['saldo'];
    echo "\n";
    echo "*******\n";

    echo "1. Consultar saldo atua\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    $opcao = (int) fgets(STDIN);

    if($opcao == 1){
        echo "Saldo: " . $conta['saldo'];
        echo "\n";
    }elseif($opcao == 2){
        echo "Digite o valor do saque:\n";
        $valor = (float) fgets(STDIN);
        if ($valor <= $conta['saldo']){
            $conta['saldo'] -= $valor;
            continue;
        }else {
            echo "Valor inválido\n";
            continue;
        }
    }elseif($opcao == 3){
        echo "Digite o valor para depositar:\n";
        $valor = (float) fgets(STDIN);
        $conta['saldo'] += $valor;
        continue;
    }elseif ($opcao == 4){
        echo "Adeus";
        break;
    }else{
        echo "Escolha invalida\n";
        continue;

    }

  } while ($opcao != 4);



