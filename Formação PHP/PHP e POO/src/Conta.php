<?php

class Conta
{
//    private string $cpfTitular;
//    private string $nomeTitular;
//    private float $saldo = 0;
//
//    function __construct(string $nomeTitular, string $cpfTitular)
//    {
//        $this->cpfTitular = $cpfTitular;
//        $this->nomeTitular = $nomeTitular;
//        $this->saldo = 0;
//    }

    public function __construct(
        private readonly string $nomeTitular,
        private readonly string $cpfTitular,
        private float $saldo,
    )
    {
        $this->saldo = 0;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar < $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo "Valor invalido";
            return;
        }
        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir < $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }


    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }


    public function getSaldo(): float
    {
        return $this->saldo;
    }


}