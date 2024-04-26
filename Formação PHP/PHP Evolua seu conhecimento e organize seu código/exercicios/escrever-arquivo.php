<?php
$handle = fopen("teste.txt", "a");
if ($handle){
    fwrite($handle, "PHP é incrível\n");
    fclose($handle);
}else{
    echo "Erro ao abrir arquivo";
}
