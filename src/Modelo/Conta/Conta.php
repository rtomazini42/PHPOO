<?php

namespace Alura\Banco\Modelo\Conta;

class Conta{
    public $titular;
    protected $saldo;
    private static $numeroDeContas = 0;
   


    public function __construct(Titular $titular)
    {
        echo "Criando nova Conta".PHP_EOL;
        $this->titular= $titular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        Conta::$numeroDeContas--;
    }

    public function sacar(float $valorASacar){

        $tarifaSaque = $valorASacar * 0.05;
        $valorASacar = $valorASacar + $tarifaSaque;

        if($valorASacar + $tarifaSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar){
        if($valorADepositar < 0){
            echo "Precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
        
    }
    public function transferir(float $valorATransferir, conta $contaDestino): void{
        if($valorATransferir > $this->saldo){
            echo "Saldo insuficiente para tranferência";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
        
    }

    public function recuperarSaldo(): float{
        return $this->saldo;
    }

   // public function defineCPF(string $cpf): void{
   //     $this->cpfTitular = $cpf;
   // }

    //public function recuperaCPF():string{
    //    return $this->cpfTitular;
    //}

    //public function defineNome(string $nome): void{
    //    $this->nomeTitular = $nome;
    //}

    //public function recuperaNome(): string{
    //    return $this->nomeTitular;
    //}


    //private function validaNomeTitular(string $nomeTitular){
    //    if(strlen($nomeTitular)<5){
    //       echo "Nome precisa ter pelo menos 5 caracteres".PHP_EOL;
    //        exit();
    //    }
    //}


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}