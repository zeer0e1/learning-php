<?php
function maioresNotas(array $notas): void{
    rsort($notas);
    $topNotas = array_slice($notas, 0, 3);
    var_dump($topNotas);
}


maioresNotas([10, 7, 5,9,6,8]);