<?php
    $conteudoJson = file_get_contents(__DIR__ . './src/filme.json');
    $filme = json_decode($conteudoJson,true);
?>

<h1>Sucesso! Filme inserido </h1>

<h2>Nome: <?php  $filme['nome']; ?></h2>
<h2>Ano lançamento: <?php  $filme['anoLancamento']; ?></h2>
<h2>Nota: <?php  $filme['nota']; ?></h2>
<h2>Genero: <?php  $filme['genero']; ?></h2>
