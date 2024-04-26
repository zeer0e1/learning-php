<?php

function exibeMensagemLancamento (int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    }elseif ($ano > 2020 ){
        echo "Esse filme não é antigo\n";
    }else{
        echo "Esse filme é antigo\n";
    }
}

function incluidoNoPlano( bool $planoPrime, int $anoLancamento): bool{
   return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao screen math!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";

$anoLancamento =  2022;

$qtdNotas = $argc - 1;

$notas = [];


for ($contador = 1;$contador < $argc; $contador++ ){
    $notas[] = (float) $argv[$contador];
}


$notaFilme =  array_sum($notas) / $qtdNotas;

$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano(true, $anoLancamento);

echo "Nome do filme: " . $nomeFilme ."\n";
echo "Nota do filme: $notaFilme\n";
echo "Anota de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero  = match ($nomeFilme) {
     "Top Gun - Maverick" => "ação",
     "Thor: Ragnarok" => "super heroi",
     "Se beber não case" => "comédia",
     default => "gênero desconhecido"
};

echo "Genero: $genero\n";


$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super heroi",
];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;
$posicaoDoisPontos = strpos($filme['nome'],':');

var_dump($filme['nome']);
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'],0, $posicaoDoisPontos));