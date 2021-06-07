<?php


require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('Paiçandu', 'João berotto', 'Onesio francisco de  Farias', '800');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Jean Everton', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$endereco2 = new Endereco('maringa', 'alvorada', 'tiao jose', '1545');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco2));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
