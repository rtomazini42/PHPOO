<?php

require_once 'src/Pessoa.php';
require_once 'src/CPF.php';
require_once 'src/Conta.php';
require_once 'src/endereco.php';
require_once 'src/Titular.php';






$primeiraConta = new Conta(new Titular(new CPF("183.028.740-00"), "Roberto Alves"));
$segundaConta = new Conta(new Titular(new CPF("605.083.480-64"), "Ana Alves"));
$terceiraConta = new Conta(new Titular(new CPF("715.685.860-27"), "Fernando Alves"));
$terceiraConta = new Conta(new Titular(new CPF("559.539.740-35"), "Fernanda Alves"));
$primeiraConta->depositar(600);
$primeiraConta->sacar(200);

//$primeiraConta->defineCPF("000.000.00-00");
//$primeiraConta->defineNome("Roberto Alves");
echo $primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->titular->retornaNome().PHP_EOL;
echo $primeiraConta->titular->retornaCpf().PHP_EOL;

var_dump($primeiraConta);



//$segundaConta = new Conta("000.000.00-00", "Rob");

echo Conta::recuperaNumeroDeContas();