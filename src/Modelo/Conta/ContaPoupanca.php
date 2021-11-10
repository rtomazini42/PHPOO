<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta{

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        $valorASacar = $valorASacar + $tarifaSaque;

        if($valorASacar + $tarifaSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }
}