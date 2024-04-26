<?php
$filmeJson = file_get_contents(__DIR__ . '/filmes.json');

$filmes = json_decode($filmeJson, true);
var_dump($filmes);