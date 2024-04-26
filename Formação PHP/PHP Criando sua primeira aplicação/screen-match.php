<?php

echo "Bem-vindo(a) ao screen math!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme =  $somaDeNotas / 5;

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme ."\n";
echo "Nota do filme: $notaFilme\n";
echo "Anota de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento";
}