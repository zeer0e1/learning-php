<?php
function divide(string $text): void{
    $array_text = explode(",", $text);
    var_dump($array_text);
};

divide("Lucas Ribeiro,1996,Programador");