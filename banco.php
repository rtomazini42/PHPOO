<?php

require_once 'autoload.php';
//spl_autoload_register(function (string $nomeCompletoDaClasse) {
//    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
//   $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
//    $caminhoArquivo .= '.php';

//    if (file_exists($caminhoArquivo)) {
//        require_once $caminhoArquivo;
//    }
//});
//require_once 'src/Modelo/Pessoa.php';
//require_once 'src/Modelo/CPF.php';
//require_once 'src/Modelo/Conta/Conta.php';
//require_once 'src/Modelo/Conta/Titular.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;


$primeiraConta = new ContaPoupanca(new Titular(new CPF("183.028.740-00"), "Roberto Alves"));
$segundaConta = new Conta(new Titular(new CPF("605.083.480-64"), "Ana Alves"));
$terceiraConta = new Conta(new Titular(new CPF("715.685.860-27"), "Fernando Alves"));
$terceiraConta = new Conta(new Titular(new CPF("559.539.740-35"), "Fernanda Alves"));
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);

//$primeiraConta->defineCPF("000.000.00-00");
//$primeiraConta->defineNome("Roberto Alves");
echo $primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->titular->retornaNome().PHP_EOL;
echo $primeiraConta->titular->retornaCpf().PHP_EOL;

//var_dump($primeiraConta);



//$segundaConta = new Conta("000.000.00-00", "Rob");

echo Conta::recuperaNumeroDeContas();