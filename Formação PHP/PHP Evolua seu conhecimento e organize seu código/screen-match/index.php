<?php

require __DIR__ . "/src/functions.php";

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


$filme = criaFilme(
    nome:"Thor: Ragnarok",
    anoLancamento:2021,
    nota:7.8,
    genero: "super heroi"
);


var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;
$posicaoDoisPontos = strpos($filme['nome'],':');

var_dump($filme['nome']);
var_dump($posicaoDoisPontos);

//var_dump(substr($filme['nome'],0, $posicaoDoisPontos));

//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super heroi"}',true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ ."/filmes.json", $filmeComoStringJson);

