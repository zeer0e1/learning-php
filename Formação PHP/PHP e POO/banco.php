<?php

require_once 'src/Conexao.php';

$primeiraConta = new Conta('Lucas Ribeiro','123.456.890',0);
$primeiraConta->sacar(300);