<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

class Titular extends Pessoa
{
    

    public function __construct(CPF $cpf, string $nome){
        parent::__construct($nome,$cpf);
        
    }





    
}