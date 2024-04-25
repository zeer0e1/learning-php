<?php

$notas = [];

for($i = 0;$i < $argc -1;$i++){
    $notas[] =  $argv[$i];
}

$media = (array_sum($notas)) / count($notas);

if ($media > 6){
    echo "Media final: $media\nAluno aprovado";
}else{
    echo "Media final: $media\nAluno reprovado";
}

