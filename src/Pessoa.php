<?php

class Pessoa{
    private $nome;
    private $cpf;



    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf= $cpf;
        $this->validaNome($nome);
        $this->nome= $nome;
    }

    public function retornaNome(): string
    {
        return $this->nome;
    }

    public function retornaCpf(): string
    {
        return $this->CPF->recuperaNumero();
    }


    public function validaNome(string $nomeTitular){
        if(strlen($nomeTitular)<5){
           echo "Nome precisa ter pelo menos 5 caracteres".PHP_EOL;
            exit();
        }
    }
}