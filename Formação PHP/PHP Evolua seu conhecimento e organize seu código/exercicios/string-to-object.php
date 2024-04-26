<?php
$texto = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

$objeto = json_decode($texto);
var_dump($objeto);
