<?php

class Titular extends Pessoa
{
    

    public function __construct(CPF $cpf, string $nome){
        parent::__construct($nome,$cpf);
        
    }





    
}