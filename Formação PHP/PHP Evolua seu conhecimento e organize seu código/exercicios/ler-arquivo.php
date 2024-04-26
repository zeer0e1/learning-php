<?php
$handle = fopen("teste.txt", "r");

if($handle){
    $linha = fgets($handle);
    echo $linha;
}else{
    echo "Erro ao abrir arquivo";
}